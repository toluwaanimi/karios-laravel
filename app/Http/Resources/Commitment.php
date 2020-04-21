<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Commitment extends JsonResource
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
            'id'=>$this->id,
            'commitment'=>$this->commitment,
            'useremail'=>$this->useremail,
            'cheerleader'=>$this->cheerleader,
            'start'=>$this->start,
            'end'=>$this->end,
            'referee'=>$this->referee,
            'stake'=>$this->stake,
            'donated'=>$this->donated,
            'filereport'=>$this->filereport
        ];
//        return parent::toArray($request);
    }
}
