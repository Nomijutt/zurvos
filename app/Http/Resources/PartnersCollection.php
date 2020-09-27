<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Carbon\Carbon;
class PartnersCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

             'id' =>$this->id,

            'full_name' => $this->full_name ==null ? '0' : $this->full_name,

            'email' => $this->email ==null ? '0' : $this->email,

            'password' => $this->password ==null ? '0' : $this->password,


            'datetime'=>Carbon::parse($this->created_at)->diffForHumans(),
            
            ]; 
    }
}