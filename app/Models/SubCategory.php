<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, "brand_sub_category", "sub_category_id", "brand_id");
    }

    public function sluggable() : array
    {
        return [
            'slug' => [
                'category:slug' => 'sub_category_name'
            ]
        ];
    }
}
