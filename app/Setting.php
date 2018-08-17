<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
  
    protected $fillable = [
        'user_id', 'qualified', 'contribute', 'level', 'interface', 'qualification','about_me'
    ];
 
}

