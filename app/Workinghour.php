<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workinghour extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function schedules()
    {
        return $this->belongsToMany(Schedules::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
