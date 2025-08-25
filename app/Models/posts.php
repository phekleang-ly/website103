<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class posts extends Model
{
    use softDeletes;
    protected $fillable = ['title','description','active','image','content','sub_title'];
}
