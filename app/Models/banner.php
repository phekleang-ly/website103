<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Banner extends Model
{
    use softDeletes;
    protected $fillable = ['name','description'];
}
