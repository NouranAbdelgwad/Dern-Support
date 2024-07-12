<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software_support extends Model
{
    protected $fillable = [
        'title',
        'img',
        'description',
        'additional_details',
        'patyment_method'
    ];
    use HasFactory;
}
