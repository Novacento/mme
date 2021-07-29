<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table ='races';

    protected $primaryKey = 'ID';

    public function RaceRegistrations(){
        return $this->hasMany(RaceRegistration::class, 'race_id', 'id');
    }
}
