<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpareParts extends Model
{
    protected $fillable=[
        "part_name",
        "part_img",
        "parts_in_stock",
        "cost"
    ];
    use HasFactory;
}
