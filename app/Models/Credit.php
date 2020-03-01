<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $fillable = [
        'user_id', 'points'
    ];

    /**
     * Credit belongs to user
     *
     * @return object
     */
    public function credit()
    {
        return $this->belongTo(User::class);
    }
}
