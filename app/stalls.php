<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stalls extends Model
{
    public function stalls(){
        return $this->hasMany('App\food');
    }
}
