<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('lang', 'LanguageController@index');
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');  
    Route::get('signup/activate/{token}', 'AuthController@signupActivate');
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('users', 'UserController@index')->name('userlang'); 
        Route::get('practice_another_lang', 'DashboardController@practice_another_lang')->name('userlang'); 
    });
});

/*
Route::get('polymorphicManyToMany', function () {
          try {
         return  App\Video::first()->comments; 
    } catch (Exception $e) {
        report($e);

  return response(['error' => 'Could not find a match'], 404)
                  ->header('Content-Type', 'text/json');
    }
});

Route::get('lang', 'AuthController@language');


Route::get('check', function () {
    
         
     return    $users = DB::table('users')
                ->whereJsonContains('learning_requested->id', 'aa')
                ->get();
  // App\User::whereRaw('JSON_CONTAINS(learning_requested, \'{"id": "en"}\')')->get();
    
    //whereRaw('JSON_CONTAINS(learning_requested->"$[*].id", "3")')->get();
 
});
        
        Route::get('sdf', function () {
            
        //return  Language::action(2)->paginate(15);
    
  // print_r(Auth::user()->isAdmin());
  //return new LanguageResource(Language::find(183));
            //return UserResource::collection(User::all());
    return new UserResource(User::find(54));
    //return new UserCollection(User::paginate());
    return new UserCollection(User::all()->where('id',  49));
            
            
*/
