<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    public $table = "category";
    protected $fillable = [
        'title',
        'price',
        'location',
        'image',
        'tags'
    ];

}
