<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // kun kun field database ma add huna sakxan
    protected $fillable=[
        'category_title',
        'slug',
        'category_image',
        'category_description',
        'status',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    // database bata aauni value yesto vyera aaija
    protected $casts = [
        'deleted_at' => 'datetime',
    ];
}
