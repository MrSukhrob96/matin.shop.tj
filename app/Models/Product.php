<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\SubCategory;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(SubCategory::class, "sub_category_id", "id");
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'product:slug' => 'product_name'
            ]
        ];
    }

}
