<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManagementModel extends Model
{
    use SoftDeletes;
    protected $table = 'managementtable';
    protected $guarded = [];
}
