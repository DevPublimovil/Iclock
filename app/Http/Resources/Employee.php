<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Departament as DepartamentResource;
use App\Http\Resources\Company as CompanyResource;

class Employee extends JsonResource
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
            'dui'           => $this->dui,
            'firma'         => $this->firma,
            'puesto'        => $this->puesto,
            'code'          => $this->code,
            'code_marking'  => $this->code_marking,
            'departament'   => new DepartamentResource($this->departament),
            'company'       => new CompanyResource($this->company),
        ];
    }
}
