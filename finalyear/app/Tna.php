<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tna extends Model
{
    protected $primaryKey = 'code';
    public $timestamps = false;

    public function getCodeAttribute(){
        return 'TT000' . $this->attributes['code'];
    }
}
