<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'user_id',
        'url',
    ];

    public function user() {//user yang menginput data image
        return $this->belongsTo('App\User', 'user_id');
    }
}