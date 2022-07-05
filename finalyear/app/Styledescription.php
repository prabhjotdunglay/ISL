<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Styledescription extends Model
{
    protected $primaryKey = 'code';
    public $timestamps = false;

    public function getCodeAttribute(){
        return 'ST000' . $this->attributes['code'];
    }
}
