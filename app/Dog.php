<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table ='dogs';

    public function Priority(){
        return $this->belongsTo(Priority::class, 'dog_priority_id' ,'id');
    }
}
