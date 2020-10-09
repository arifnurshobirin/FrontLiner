<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function cashiers()
    {
        return $this->belongsToMany(Cashier::class);
    }

    public function workinghours()
    {
        return $this->hasMany(Workinghour::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
