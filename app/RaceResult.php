<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaceResult extends Model
{
    protected $table ='race_results';

    public function RaceRegistration(){
        return $this->belongsTo(RaceRegistration::class,'race_reg_id', 'id' );
    }
}
