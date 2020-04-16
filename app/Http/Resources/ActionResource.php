<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;
use \Carbon\Carbon as Fecha;

class ActionResource extends JsonResource
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
            'id'            =>$this->id,
            'user'          => $this->user->name,
            'items'         => $this->items,
            'check_rh'      => ($this->check_rh == 0) ? false : true,
            'check_gte'     => ($this->check_gte == 0) ? false : true,
            'other_action'  => $this->other_action,
            'description'   => $this->description,
            'created_at'    => Fecha::parse($this->created_at)->format('Y-m-d'),
            'hora'          => Fecha::parse($this->created_at)->format('H:m a')
        ];
    }
}
