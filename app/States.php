<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $fillable = [
        'state_name',     
    ]; 
    
    public function districts(){
        return $this->hasMany('App\Districts','states_id'); 
    }
    public function students(){
        return $this->hasMany('App\Students','state_id'); 
    }
    
    //
}
