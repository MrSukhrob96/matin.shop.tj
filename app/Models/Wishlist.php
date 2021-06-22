<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\User;
use App\Models\Product;

class Wishlist extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
}
