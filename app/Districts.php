<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    //
     protected $fillable = [
        'states_id',
        'district_name', 
    ]; 
    
    public function states(){
        return $this->belongsTo('App\States','states_id');
    }
    public function students(){
        return $this->hasMany('App\Students','district_id'); 
    }
}
