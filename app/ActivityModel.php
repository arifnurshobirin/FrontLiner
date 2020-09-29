<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityModel extends Model
{
    use SoftDeletes;
    protected $table = 'activitytable';
    protected $guarded = [];
}
