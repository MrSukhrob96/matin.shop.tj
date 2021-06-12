<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Brand;
use App\Models\Category;
use App\Models\News;
use App\Models\Ostatok;
use App\Models\SubCategory;
use App\Models\Rashod;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Filter;
use App\Models\Wishlist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory(10)->create();
        Category::factory(10)->create();
        Ostatok::factory(10)->create();
        SubCategory::factory(10)->create();
        Rashod::factory(10)->create();
        User::factory(10)->create();
        Product::factory(10)->create();
        Order::factory(10)->create();
        Filter::factory(10)->create();
        Wishlist::factory(10)->create();
        News::factory(10)->create();

        // \App\Models\User::factory(10)->create();
    }
}
