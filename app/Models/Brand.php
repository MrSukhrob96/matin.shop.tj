<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Product;
use App\Models\SubCategory;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function sub_categories()
    {
        return $this->belongsToMany(Brand::class, "brand_sub_category", "brand_id", "sub_category_id");
    }

}
