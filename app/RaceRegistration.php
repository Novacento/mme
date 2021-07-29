<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaceRegistration extends Model
{
    protected $table ='race_registrations';

    public function Race(){
        return $this->belongsTo(Race::class, 'race_id' ,'id');
    }

    public function User(){
        return $this->belongsTo(User::class,'user_id', 'id' );
    }

    public function RaceResults(){
        return $this->hasMany(RaceResult::class, 'race_reg_id', 'id');
    }
}
