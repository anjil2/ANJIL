<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     //  kun kun field database ma add huna sakxan
     protected $fillable = [
        'category_id',
        'product_title',
        'slug',
        'product_image',
        'product_description',
        'product_stock',
        'original_cost',
        'discounted_cost',
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
public function category()
{
//  mathi ko category() bhanni xa ni tyo chai function define gareko name ho 
    // return $this->kun chai relation ho ex.hasone..(modelname kata bata access garni bhanera::class,'foreign key','primarykey');

    // belongTo chai yo product chai category ko child ho ani chai eutai parent i.e. category sng belong garxa tesaile  
    return $this->belongsTo(Category::class,'category_id','id');
}

}
