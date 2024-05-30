<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public $table = "profile";
    protected $fillable = [
        'fullname',
        'card_id',
        'phone',
        'address',
        'id_user'
    ];
}
