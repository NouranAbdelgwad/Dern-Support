<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware_support extends Model
{
    protected $fillable = [
        'title',
        'img',
        'description',
        'additional_details',
        'patyment_method',
        'support_method'
    ];
    use HasFactory;
}
