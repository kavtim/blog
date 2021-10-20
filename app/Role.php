<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name', 'age', 'location','NOK'
    ];


    public function workers(){

        return $this->hasMany('App\Providers\Worker');
    }



}
