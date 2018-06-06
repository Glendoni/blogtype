<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
     protected $fillable = [
        'name', 'RelatedAccountId',
    ];
    //
    public function relatedAccount()
    {
       return $this->belongsToMany('App\Account', 'role_user','company_id', 'RelatedAccountId');
       // return $this->hasMany('App\Account',  'RelatedAccountId' , 'RelatedAccountId');
    }
    
       public function account()
    {
        return $this->hasMany('App\Account', 'RelatedAccountId' , 'RelatedAccountId');
    }
}
