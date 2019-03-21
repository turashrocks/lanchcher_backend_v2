<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Userseat extends JsonResource
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
            'user_id' => $this->id,
            'user_pc_uuid' => $this->user_pc_uuid,
            'user_pc_name' => $this->user_pc_name,
            'installation_date' => $this->installation_date,
            'status' => $this->status
        ];
    }
}
