<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    protected $fillable = [
        'user_id',
        'project_id',
        'is_positive',
    ];
}
