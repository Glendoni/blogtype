<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Setting as SettingResource;
use App\Http\Resources\Language as LanguageResource;
class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    return [
     
    'name' => $this->name,
    'email' => $this->email,
        /*
    $this->mergeWhen(Auth::user()->isAdmin(), [
        'first-secret'   =>    $this->languages->pluck('description'),
        'second-secret' => 'value',
    ]),
    'secret'  => $this->when(Auth::user()->isAdmin(),function () {
        return 'secret-value';
    }), 
    'languages' =>  [
        $this->languages
    ],
    */
     
         'settings' => SettingResource::collection($this->settings),
        //$this->settings->where('user_id', 49)->first()
    
    'created_at' => $this->created_at,
    'languages' => LanguageResource::collection($this->languages),
    'updated_at' => $this->updated_at,
    ];
    }

    public function with($request){

        return [
        'version' => '1.0'

        ];
    }
}
