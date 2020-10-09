<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cashier extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
