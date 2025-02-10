<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'discount_price',
        'rating',
        'review_count',
        'description',
        'availability',
        'brand',
        'category',
        'sku',
        'sizes',
        'colors',
        'material',
        'weight',
    ];
}
