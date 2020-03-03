<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'user_id',
        'description',
        'code',
        'currency',
        'sub-total',
        'total',
    ];
}
