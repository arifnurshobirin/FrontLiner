<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consolidate extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }

    public function counter()
    {
        return $this->belongsTo(Counter::class);
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
