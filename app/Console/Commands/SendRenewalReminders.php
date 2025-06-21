<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Console\Command;
use App\Mail\RenewalReminderMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendRenewalReminders extends Command
{
    protected $signature = 'reminders:renewals';
    protected $description = 'Send renewal reminder emails to customers';

    // public function handle()
    // {
    //     $targetDate = Carbon::now()->addDays(14)->toDateString();
    //     // $targetDate = Carbon::now()->toDateString();
    //     $customers = Customer::whereDate('expiry_date', $targetDate)->get();
    //     Log::info("Checking renewal reminders for {$targetDate}");
    //     Log::info("Found {$customers->count()} customer(s)");

    //     foreach ($customers as $customer) {
    //         if ($customer->email && filter_var($customer->email, FILTER_VALIDATE_EMAIL)) {
    //             Mail::to($customer->email)->send(new RenewalReminderMail($customer));
    //             $this->info("Reminder sent to: {$customer->email}");
    //         } else {
    //             $this->warn("No valid email for customer ID {$customer->id}");
    //         }
    //         Log::info("Customer: {$customer->email}");
    //     }
    // }
    public function handle()
{
    $intervals = [30, 10, 2, 1];
    $today = Carbon::now()->toDateString();

    foreach ($intervals as $daysBefore) {
        $targetDate = Carbon::now()->addDays($daysBefore)->toDateString();
        $customers = Customer::whereDate('expiry_date', $targetDate)->get();

        Log::info("Renewal check for expiry on {$targetDate} (in {$daysBefore} day(s))");
        Log::info("Found {$customers->count()} customer(s)");

        foreach ($customers as $customer) {
            if ($customer->email && filter_var($customer->email, FILTER_VALIDATE_EMAIL)) {
                Mail::to($customer->email)->send(new RenewalReminderMail($customer, $daysBefore));
                $this->info("Reminder sent to: {$customer->email} ({$daysBefore} days before expiry)");
                Log::info("Reminder sent to: {$customer->email} ({$daysBefore} days before expiry)");
            } else {
                $this->warn("No valid email for customer ID {$customer->id}");
                Log::warning("Invalid email for customer ID {$customer->id}");
            }
        }
    }
}
}
