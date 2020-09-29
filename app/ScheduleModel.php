<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ScheduleModel extends Model
{
    use SoftDeletes;
    protected $table = 'scheduletable';
    protected $guarded = [];
}
