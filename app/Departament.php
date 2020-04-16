<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $guarded = [];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
