<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Paginator::useBootstrap();

        // view()->composer('_components.header.front.header_bottom', function ($view) {
        //     $view->with('categories', Category::all());
        // });
    }
}
