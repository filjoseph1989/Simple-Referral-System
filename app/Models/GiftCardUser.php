<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftCardUser extends Model
{
    protected $fillable = [
        'user_id', 'gift_card_id', 'quantity'
    ];

    /**
     * Owned by gif card
     *
     * @return object
     */
    public function gift_card()
    {
        return $this->belongsTo(GiftCard::class);
    }
}
