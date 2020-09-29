<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonitoringModel extends Model
{
    use SoftDeletes;
    protected $table = 'monitoringtable';
    protected $guarded = [];
}
