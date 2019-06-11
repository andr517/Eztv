<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
    public function User() {
        return $this->belongsToMany('app\User');
    }
}
