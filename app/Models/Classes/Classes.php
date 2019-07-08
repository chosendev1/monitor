<?php

namespace App\Models\Classes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
   // use SoftDeletes;
    
   // protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
}
