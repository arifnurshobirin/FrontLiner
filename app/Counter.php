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
}
