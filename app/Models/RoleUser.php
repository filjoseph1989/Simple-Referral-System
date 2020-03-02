<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    /**
     * Role is part of table roles
     *
     * @return object
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
