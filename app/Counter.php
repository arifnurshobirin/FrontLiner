<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Counter extends Model
{
    Use SoftDeletes;
    protected $guarded = [];

    public function edcs()
    {
        return $this->hasMany(Edc::class);
    }

    public function computer()
    {
        return $this->hasOne(Computer::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }

    public function consolidates()
    {
        return $this->hasMany(Consolidate::class);
    }
}
