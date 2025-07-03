<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name',
        'email',
        'address',
        'contact1',
        'contact2',
        'iot_sim_number',
        'start_date',
        'expiry_date',
        'software_name',
        'renewal_amount',
        'technician_name',
        'comment',
        'imei_number',
        'username',
        'vehicle_number',
        'dealer_type',
        'dealer_name',
        'district',
    ];
}
