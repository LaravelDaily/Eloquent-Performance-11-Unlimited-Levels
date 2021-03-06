<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class)->with(['subcategories' => function($query) {
            $query->withCount('products');
        }]);
    }
}
