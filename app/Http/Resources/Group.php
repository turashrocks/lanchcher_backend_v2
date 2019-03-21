<?php

namespace App\Http\Resources;
use App\Models\App;

use Illuminate\Http\Resources\Json\JsonResource;

class Group extends JsonResource
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
            'id' => $this->id,
            'group_name' => $this->group_name,
            'group_description' => $this->group_description
            // 'app_id' => $this->whenPivotLoaded('group_app', function () {
            //      return $this->pivot->app_id;
            //  }),
        ];
    }
}
