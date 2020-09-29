<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class POSModel extends Model
{
    use SoftDeletes;
    protected $table = 'postable';
    protected $guarded = [];
}
