<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\Role;
use App\Language ;
use App\Http\Resources\Language as LanguageResource;
use App\Http\Resources\LanguageCollection;

class DashboardController extends Controller
{
    //
    function practice_another_lang(){
        return Language::Contribute()->get();
    }
    function search(Request $request){
        
        
    }
}
