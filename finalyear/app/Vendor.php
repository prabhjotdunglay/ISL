<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $primaryKey = 'code';
    public $timestamps = false;

    public function getCodeAttribute(){
        return 'SU000' . $this->attributes['code'];
}
}
