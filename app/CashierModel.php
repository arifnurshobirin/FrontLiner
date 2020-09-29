<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashierModel extends Model
{
    use SoftDeletes;
    protected $table = 'cashiertable';
    protected $guarded = [];
}
