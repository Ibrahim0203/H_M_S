<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaveroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name','student_id','program','semester','room_no','building_id','floor_id','slug'
       ];

       //
       public function building()
       {
           return $this->belongsTo('App\Models\Building');
       }
   
       public function floor()
       {
           return $this->belongsTo('App\Models\Floor');
       }
}
