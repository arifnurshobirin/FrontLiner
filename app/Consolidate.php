<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consolidate extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function cashiers()
    {
        return $this->belongsToMany(Cashier::class);
    }

    public function counters()
    {
        return $this->belongsToMany(Counter::class);
    }

    public function banknotes()
    {
        return $this->belongsToMany(Banknote::class);
    }

    public function coins()
    {
        return $this->belongsToMany(Coin::class);
    }
}
