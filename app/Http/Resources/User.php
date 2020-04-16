<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Country as CountryResource;
use App\Http\Resources\Employee as EmployeeResource;
use App\Country;

class User extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'email'         => $this->email,
            'avatar'        => $this->avatar,
            'created_at'    => $this->created_at,
            'country'       => new CountryResource(Country::find($this->country_id)),
            'empleado'      => new EmployeeResource($this->employee)
        ];
    }
}
