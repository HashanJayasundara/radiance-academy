<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'event_location',
        'event_time',
        'event_date',
        'event_category',
        'package_type',
        'num_dancers',
        'status'
    ];
}
