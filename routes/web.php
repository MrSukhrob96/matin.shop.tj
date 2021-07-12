<?php

/* =============== Front Routes =============== */

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

use App\Http\Controllers\Search\SearchController;

use App\Http\Controllers\About\InfoController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController as AdminProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Category\ProductCategoryController;

use App\Http\Controllers\News\NewsController;

use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ProductsController;

use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\WishlistController;
use App\Http\Controllers\Profile\OrderController;
/* =============== Front Routes =============== */


Route::get('/', [MainController::class,  'index'])->name('home');

Route::get('categories', [ProductCategoryController::class, 'index'])->name('categories');
Route::get('category/{sub_category:slug}', [ProductsController::class, 'show'])->name('sub_categories');
Route::get('category/{category:slug}/products', [ProductsController::class, 'index'])->name('products');
Route::get('category/{category:slug}/product/{product:slug}', [ProductController::class, 'show'])->name('product_show');


Route::post('categories', [ProductCategoryController::class, 'filter'])->name('filter_categories');
Route::post('category/{sub_category:slug}', [ProductsController::class, 'filter'])->name('filter_subcategory');
Route::post('category/{category:slug}/products', [ProductsController::class, 'filter'])->name('filter_category');

Route::middleware(['auth'])->group(function () {

    Route::name('profile.')->group(function () {
        Route::get('profile', [ProfileController::class, 'index'])->name('main');
        Route::post('profile', [ProfileController::class, 'store'])->name('update_data');

        Route::get('profile/wishlist', [WishlistController::class, 'index'])->name('wishlist');
        Route::get('profile/wishlist/{product:slug}', [WishlistController::class, 'wishlist_add'])->name('wishlist_add_get');
        Route::post('profile/wishlist/{product:slug}', [WishlistController::class, 'store'])->name('wishlist_add');
        Route::delete('profile/wishlist/{product:slug}', [WishlistController::class, 'destroy'])->name('wishlist_remove');

        Route::get('profile/cart', [OrderController::class, 'index'])->name('order');
        Route::post('profile/cart', [OrderController::class, 'update'])->name('order_update');
        Route::post('profile/cart/{product:slug}', [OrderController::class, 'store'])->name('order_add');
        Route::post('profile/cart/{product:slug}/order', [OrderController::class, 'to_order'])->name('to_order');
        Route::delete('profile/cart/{order:slug}', [OrderController::class, 'destroy'])->name('order_remove');
    });

    Route::get('logout', LogoutController::class)->name('logout');

    Route::prefix('admin')->group(function () {
    });
});

Route::get('news.', [NewsController::class, 'index'])->name('news'); // новости

Route::name('search.')->group(function () {
    Route::prefix('search')->group(function () {
        Route::get('/', [SearchController::class, 'index'])->name('index'); // резултать поиска
        Route::post('/', [SearchController::class, 'show'])->name('show'); // резултать поиска 
    });
});

Route::name('info.')->group(function () {
    Route::get('about', [InfoController::class, 'about'])->name('about'); // о магазин
    Route::get('conditions', [InfoController::class, 'conditions'])->name('conditions'); // условия
    Route::get('delivery', [InfoController::class, 'delivery'])->name('delivery'); // доставка
    Route::get('rastrochka', [InfoController::class, 'rastrochka'])->name('rastrochka'); // растрочка
    Route::get('vozvrat', [InfoController::class, 'vozvrat'])->name('vozvrat'); // возврат
    Route::get('contact', [InfoController::class, 'contact'])->name('contact'); // contact
});



Route::get('login', [LoginController::class, 'index'])->name('login');

Route::name('sign')->group(function () {
    Route::post('login', [LoginController::class, 'store'])->name('in_post');
    Route::get('register', [RegisterController::class, 'index'])->name('up_get');
    Route::post('register', [RegisterController::class, 'store'])->name('up_post');
});


// Route::middleware(['auth'])->group(function () {
Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {

        Route::get('/', [AdminMainController::class, 'index'])->name('home');
        Route::get('/login', [LoginController::class, 'index'])->name('login');

        Route::resource('orders', OrdersController::class);
        Route::resource('products', AdminProductsController::class);
        Route::resource('categories', CategoriesController::class);
        Route::resource('brands', BrandsController::class);
        Route::resource('users', UsersController::class);
        Route::resource('news', AdminNewsController::class);
        Route::resource('clients', ClientsController::class);
    });
});
// });
