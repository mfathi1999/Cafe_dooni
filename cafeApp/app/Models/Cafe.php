<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'map',
        'city',
        'provance',
        'email_address',
        'phone_number',
    ];

    public function getAttributesAttribute($value){

        return (array) json_decode($value);
    }

   
}
