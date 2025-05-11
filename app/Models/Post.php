<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['title', 'desc', 'text', 'date'];
protected $dates = ['date']; // Или использовать $casts
// Либо
protected $casts = [
    'date' => 'datetime',
];
}
