<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $table ='priorities';

    public function Dogs(){
        return $this->hasMany(Dog::class, 'dog_priority_id', 'id');
    }
}
