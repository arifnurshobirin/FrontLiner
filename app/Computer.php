<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Computer extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function counter()
    {
        return $this->belongsTo(Counter::class);
    }
}
