<?php

namespace App\Model\Students;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
}
