<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;
    protected $guarded = [];


    public function cashiers() 
    {
        return $this->belongsToMany(Cashier::class);
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function workinghours()
    {
        return $this->belongsToMany(Workinghour::class);
    }

    public function counters()
    {
        return $this->belongsToMany(Counter::class);
    }
}
