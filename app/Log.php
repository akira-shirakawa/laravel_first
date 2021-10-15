<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable =
    ['comment',
    'comment_old',
    'statue',
    'comment_id'];
}
