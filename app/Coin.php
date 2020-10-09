<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coin extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function consolidate()
    {
        return $this->belongsTo(Consolidate::class);
    }
}
