<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }

    public function workinghour()
    {
        return $this->belongsTo(Workinghour::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
