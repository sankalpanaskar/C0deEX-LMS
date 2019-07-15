<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable=[ 
            'fullname',
            'dob',
            'gender',
            'address',
            'state_id',
            'district_id',
            'city',
            'pin',
            'phone',
            'email',
            'education',
            'course_type',
            'course',
            'msg', 
            ];
            
            public function states()
            {
                return $this->belongsTo('App\States','state_id');
            }
            public function districts()
            {
                return $this->belongsTo('App\Districts','district_id');
            }
            
    //
}
