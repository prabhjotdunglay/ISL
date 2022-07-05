<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $primaryKey = 'code';
    public $timestamps = false;

    public function getCodeAttribute(){
        return 'TM000' . $this->attributes['code'];
    }
}
