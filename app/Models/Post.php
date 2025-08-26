<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Post extends Model
{
    use softDeletes;
    protected $fillable = ['title','description','active','image','content','sub_title'];
}
