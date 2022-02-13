<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersPhoneNumber extends Model
{
    protected $table= "books";
    protected $fillable = [
        'phone_number',
    ];
}
