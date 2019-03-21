<?php

namespace App\Http\Resources;
use App\Models\App;

use Illuminate\Http\Resources\Json\JsonResource;

class Build extends JsonResource
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
            'id'=> $this->id,
            'build_name' => $this->build_name,
            'config_file'=> url('/uploads/' . $this->config_file . '/'),
            'app_id'=> $this->app_id
        ];
    }
}
