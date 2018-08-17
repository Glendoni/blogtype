<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
class User extends Authenticatable
{
 
use Notifiable, HasApiTokens,SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'activation_token', 'qualified','terms'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'password', 'remember_token', 'activation_token'
    ];
    
      /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
            
            //->as('subscription')->wherePivotIn('priority', [1,2]);;
    }
    
    public function languages(){
        
         return $this->hasMany('App\Language');
    }
      public function settings(){
        
         return $this->hasMany('App\Setting');
    }
    
static function isAdmin(){
      return true;
    }
    
    //protected $casts = ['multiples' => 'array'];
 
public static function existsAndAdmin()
{
    $user = Auth::user();

    if ($user && $user->isAdmin()) {
        return true;
    }

    return $user;
}
}
