<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Setting extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       //return parent::toArray($request);
        return [
                  'interface' =>  $this->interface ,
                  'qualification' =>  $this->qualification ,
                  'about_me' =>  $this->about_me
                ];
    }
}
