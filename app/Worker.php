<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function test(){

        return $this->hasMany(Role::class,'id','role');
    }
}
