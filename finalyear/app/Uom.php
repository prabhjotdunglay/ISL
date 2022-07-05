<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $primaryKey = 'code';
    public $timestamps = false;

    public function getCodeAttribute(){
        return 'UM000' . $this->attributes['code'];
    }
}
