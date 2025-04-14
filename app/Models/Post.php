<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // Si se omite esta declaración Eloquent utiliza una tabla con el mismo nombre del modelo, todo en minusculas y en plural, en este caso 'posts'
    protected $table = 'posts';
}
