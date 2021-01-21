<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $fillable=['floor'];
    public function allocations()
    {
        return $this->belongsToMany('App\Models\Allocation');
    }

    public function leaverooms()
    {
        return $this->hasMany('App\Models\Leaveroom');
    }
}
