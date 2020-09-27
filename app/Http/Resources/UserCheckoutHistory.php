<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCheckoutHistory extends JsonResource
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

            'id' => $this->id,

            'user_id'=>$this->customer_id,

            'user_name'=>$this->full_name,

            'check_out' => $this->check_out ==null ? '0' : $this->check_out,

            

        ];
    }
}
