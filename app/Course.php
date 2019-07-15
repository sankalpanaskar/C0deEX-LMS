<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        
        'course_type_id',
        'course_name',
    ]; 
    
     public function course_type(){
        return $this->belongsTo('App\Course_type','course_type_id');
    }
}
