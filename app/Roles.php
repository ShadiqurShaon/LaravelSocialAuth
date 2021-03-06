<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function user(){
        return $this->belongsToMany(User::class,'role_user');
    }
}
