<?php

namespace App\Model\Subject;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectType extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
   protected $guarded = ['id'];
}
