<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
     /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->as('subscription')->wherePivotIn('priority', [1, 2]);;
    }

}
