<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
      'file', 'matter', 'task', 'type', 'content'
    ];
}
