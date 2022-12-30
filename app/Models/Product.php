<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable =[
        'admin_id',
        'category_id',
        'subcategory_id',
        'title',
        'dec',
        'original-price',
        'old-price',
        'dic-per',
        'new-price',
        'qty',
        'meta-title',
        'meta-dec',
        'meta-key',
    ];
}
