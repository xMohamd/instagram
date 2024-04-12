<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_infos extends Model
{
    use HasFactory;
    protected $fillable = [
        'bio',
        'website',
        'gender',
        'avatar',
    ];
    public $timestamps =false;
}
