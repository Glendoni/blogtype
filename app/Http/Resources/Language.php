<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Language extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
        return [
                 'description' => $this->description,
                 'code' => $this->code, 
                 'languageSpokenLevelArr' => $this->languageSpokenLevelArr,
                 'qualified_teacher' => $this->qualified_teacher,
                 'contribute_to_community' => $this->contribute_to_community,
                 'action' => $this->action 
                ];
    }
}
