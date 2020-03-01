<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
        'user_id', 'code'
    ];

    /**
     * Owned by user
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
