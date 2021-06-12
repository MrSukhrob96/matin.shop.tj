<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\Product;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany(Product::class, "id", "sub_category_id");
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'category:slug' => 'sub_category_name'
            ]
        ];
    }
}
