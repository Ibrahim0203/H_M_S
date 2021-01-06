<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Allocation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
     'student_name','student_id','program','semester','room_no','building_id','floor_id','slug'
    ];

    protected $dates = ['deleted_at'];
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
