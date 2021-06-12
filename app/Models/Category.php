<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\SubCategory;

class Category extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $dates = ['deleted_at'];

    public function sub_category()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->sub_category->products;
    }


    public function sluggable()
    {
        return [
            'slug' => [
                'category:slug' => 'title'
            ]
        ];
    }
}
