<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    function posts()
    {
        return $this->hasMany(Post::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
