<?php

namespace App\Models\Subject;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    //use SoftDeletes;
    
    //protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
}
