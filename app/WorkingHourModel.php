<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class WorkingHourModel extends Model
{
    use SoftDeletes;
    protected $table = 'workinghourtable';
    protected $guarded = [];
}
