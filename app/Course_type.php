<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_type extends Model
{
    
    protected $fillable = [
        
        'course_type_name', 
    ]; 
    
     public function course(){
        return $this->hasMany('App\Course','course_type_id'); 
    }
    //
}
