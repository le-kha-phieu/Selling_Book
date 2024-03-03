<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'publishing_year',
        'image_product',
        'description',
        'category_id',
        'delivery_time',
        'price',
        'sell_number',
    ];
}
