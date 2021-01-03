<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','room_no_id','slug'
       ];

       //
       public function room()
       {
           return $this->belongsTo('App\Models\Category');
       }
   
}
