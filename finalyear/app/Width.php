<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Width extends Model
{
    protected $primaryKey = 'code';
    public $timestamps = false;

    public function getCodeAttribute(){
        return 'WM000' . $this->attributes['code'];
}
}
