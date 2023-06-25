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
//   yo chai eloquent relationship ho laravel ko 
public function products(){

    // return $this->kun chai relation ho ex.hasone..(modelname kata bata access garni bhanera::class,'foreign key','primarykey');

    // hasMany chai yo category parent bhayo ani yesko dherau hild huna sakxa tesaile bhayera ho
    return $this->hasMany(Product::class,'category_id','id');
}
}
