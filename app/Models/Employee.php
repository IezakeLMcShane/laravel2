<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Указываем, какие поля могут быть массово назначены
    protected $dates = ['birthday'];
    protected $fillable = [
        'name',
        'birthday',
        'position',
        'salary',
    ];
}
