<?php

namespace App\Model\Grade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
}
