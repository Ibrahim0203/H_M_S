<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
       ];

    public function allocations()
    {
        return $this->hasMany('App\Models\Allocation');
    }
    public function leaverooms()
    {
        return $this->hasMany('App\Models\Leaveroom');
    }
}
