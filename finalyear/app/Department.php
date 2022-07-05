<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'departmentname',
    ];

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }

    public function visitors()
    {
        return $this->hasMany('App\UserModel\Visitor');
    }

    public function company()
    {
        return $this->belongsTo('App\User');
    }

}
