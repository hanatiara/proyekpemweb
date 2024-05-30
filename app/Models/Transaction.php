<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $table = "transaction";
    protected $fillable = [
        'user_id',
        'id_transaction',
        'fullname',
        'total_amount',
        'status'

    ];


}
