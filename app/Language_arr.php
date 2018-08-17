<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language_arr extends Model
{
    //
    
       protected $fillable = [
        'description', 'code' 
    ];
    
    protected $hidden = ['id'];
    
    
    public static function lang(){
        
        
        
        
    }
}
