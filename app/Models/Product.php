<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Wishlist;
use App\Models\Order;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = array(
        
    );

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsToMany(SubCategory::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function sluggable() : array
    {
        return [
            'slug' => [
                'product:slug' => 'product_name'
            ]
        ];
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }

}
