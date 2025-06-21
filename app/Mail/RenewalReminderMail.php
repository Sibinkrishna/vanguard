<?php

namespace App\Mail;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class RenewalReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;
    public $daysBefore;

    public function __construct(Customer $customer, $daysBefore)
    {
        $this->customer = $customer;
        $this->daysBefore = $daysBefore;
    }
    public function build()
    {
        return $this->subject('Your Product Renewal is Due')
                    ->view('email.renew_mail');
    }

}
