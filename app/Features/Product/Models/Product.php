<?php

namespace App\Features\Product\Models;

use Illuminate\Database\Eloquent\Model;
use App\Features\Category\Models\Category;


use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
