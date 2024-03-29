<?php

namespace Src\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChargeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => new UserResource($this->user),
            'value' => $this->value,
            'type' => $this->type
        ];
    }
}
