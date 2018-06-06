<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The users that belong to the role.
     */
    public function role()
    {
        return $this->belongsToMany('App\User')->using('App\UserRole');
    }
}
