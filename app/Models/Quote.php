<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
    'moving_from',
    'moving_to',
    'property_type',
    'moving_date',
    'specific_date',
    'other_details',
    'enquiry',
    'quote_type',
    'previous_booking',
    'first_name',
    'last_name',
    'email',
    'mobile_number',
    'addons',
    'contact_time',
];

}
