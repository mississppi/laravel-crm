<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    protected $attributes = [
        'phone' => null,
        'address' => null,
    ];
}
