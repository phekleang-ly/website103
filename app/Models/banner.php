<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class banner extends Model
{
    use softDeletes;
    protected $fillable = ['name','description'];
}
