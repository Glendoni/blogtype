<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
       protected $fillable = [
        'user_id', 'description', 'code', 'main','action'
    ];
   protected $hidden = [
        'user_id'
    ];
    
    public function scopeCode($query)
    {
    return $query->where('code', '=', 'fr');
    }

    public function scopeAction($query, $flag)
    {
    return $query->where('action', $flag);
    }
    public function scopeContribute($query, $id=true)
    {
    return $query->where('contribute_to_community', $id)
        ->inRandomOrder()->select('code', 'description')
        ->groupBy('code', 'description')
        ->limit(4);
    }
}
