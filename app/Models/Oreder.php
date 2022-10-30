<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oreder extends Model
{
    use HasFactory;
    protected $fillable = [
        'foodname',
        'quantity',
        'price',
        'name',
        'phone',
        'address',
    ];
}
