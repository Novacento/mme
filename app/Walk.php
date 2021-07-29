<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Walk extends Model
{
    protected $table ='walks';

    public function User(){
        return $this->belongsTo(User::class, 'user_id' ,'id');
    }

    public function Dog(){
        return $this->belongsTo(Dog::class,'dog_id', 'id' );
    }

}
