<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'street_address',
        'town_or_city',
        'zipcode',
        'status',
        'amount',
        'term_condition_agree',
        'payment_provider_customer_no',
        'payment_provider_transaction_id',
        'cc_last_digits',
        'booking_id',
    ];
}
