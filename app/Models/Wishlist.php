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
    use HasFactory, SoftDeletes, Sluggable;

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'slug' => 'title'
            ]
        ];
    }

}
