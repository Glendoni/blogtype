<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\Setting;
use App\Language_arr;
use App\Language;
use App\Role;
use App\Notifications\SignupActivate;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|confirmed',
            'selectedItems' => 'required|array',
            'terms' => 'required|boolean',
            'learning_requested' => 'required_with:text',
             'email' => 'required|string|email|unique:users',
            'contribute' => 'boolean',
            'languageSpoken' => 'required|array',
            'languageSpokenLevel' => 'required|array',
            'qualified' => 'boolean',
            'terms' => 'required|boolean'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activation_token' => str_random(60),
            'terms' => $request->terms
        ]);
       $user->save();
        // $user = $user->where('email', 'glendonsmall@yahoo.co.uk')->first();
        $user = $user->where('email', $request->email)->first();
//print_r($mainLang);
// dd('');
        DB::table('languages')->where('user_id',$user->id)->delete();
        $this->practice_languages_tbl($request, $user);
        $this->add_to_settings_tbl($request, $user);
        $this->additional_languages_tbl($request, $user);
        $this->add_main_languages_tbl($request, $user);
       // $user->roles()->attach(array_sum($request->selectedItems), ['priority' => 2]);
        $user->notify(new SignupActivate($user));
        
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }
    
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        $credentials['active'] = 1;
        $credentials['deleted_at'] = null;
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Your email or password does not match'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
            $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ]);
    }
  
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
  
    public function signupActivate($token)
    {
        $user = User::where('activation_token', $token)->first();
        if (!$user) {
            return response()->json([
                'message' => 'This activation token is invalid.'
            ], 404);
        }
        $user->active = true;
        $user->activation_token = '';
        $user->save();
        return $user;
    }
    
    private function practice_languages_tbl($request, $user)
    {
        if(count($request->prac)){ 
        $tags = array_map(function($tag) {
                    return array(
                    'description' => $tag['text'],
                    'code' => $tag['id']
                    );
                },  $request->prac[0]['learning_requested']);

                foreach($tags as $item => $value){
                    $tags[$item] = $value;
                    $tags[$item]['user_id'] = $user->id; 
                    $tags[$item]['action']  = 3;    
                }
        //DB::table('languages')->where('user_id',$user->id)->where('action', 3)->delete();
              Language::insert($tags);
        }
    }
      private function additional_languages_tbl($request, $user)
      {
          $lan = [];
          if(is_array($request->ittems)){
                foreach($request->ittems as $lang => $value)
                {
                    $lan[$lang] = $this->language_inverse($value['additional_langauges']);
                    $lan[$lang][0]['languageSpokenLevelArr'] =  $value['languageSpokenLevelArr'][0]['text'];
                    $lan[$lang][0]['qualified_teacher']  = $value['qualified_teacher'];
                    $lan[$lang][0]['contribute_to_community'] = $value['contribute_to_community'];
                    $lan[$lang][0]['user_id'] = $user->id; 
                    $lan[$lang][0]['action'] = 2;
                }
        //DB::table('languages')->where('user_id',$user->id)->where('action', 2)->delete();
                foreach ($lan as $item => $value)
                {   
                    Language::insert($value);
                }
          }
      }
    
     private function add_to_settings_tbl($request, $user)
     {
        $settings = new Setting([
            'user_id' => $user->id,
            'qualification' => '',
            'about_me' => '',
            'interface' => array_sum($request->selectedItems),

         ]);
        $settings->save();  
    }
    
    private function add_main_languages_tbl($request, $user)
    {
        $mainLang = $this->language_inverse($request->languageSpoken);
        $mainLang[0]['user_id'] = $user->id;
        $mainLang[0]['action'] =1;
        $mainLang[0]['qualified_teacher'] = $request->qualified;
        $mainLang[0]['contribute_to_community'] = $request->contribute;
        $mainLang[0]['languageSpokenLevelArr'] = $request->languageSpokenLevel[0]['text']; 
        Language::insert($mainLang);
    }
    
    public function language_inverse($input)
    {
        $output = array_map(function($tag) {
            return array(
            'description' => $tag['text'],
            'code' => $tag['id']
            );
            },  $input);
        return $output;
    }
    
    public function language()
    { 
        $lang =  Language_arr::all();
        $tags = array_map(function($tag) {
        return array(
        'id' => $tag['code'],
        'text' => $tag['description']
        );
        },  $lang->toArray());
        return $tags;
    }  
}
