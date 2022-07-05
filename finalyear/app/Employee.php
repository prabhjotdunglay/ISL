<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','department_name',
    ];

    public function department()
    {
        return $this->belongsTo('App\\Department');
    }

}
