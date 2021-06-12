<?php

/* =============== Front Routes =============== */
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

use App\Http\Controllers\Search\SearchController;

use App\Http\Controllers\About\InfoController;

use App\Http\Controllers\Category\ProductCategoryController;

use App\Http\Controllers\News\NewsController;

use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ProductsController;

use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\WishlistController;
use App\Http\Controllers\Profile\CartController;
use App\Http\Controllers\Profile\OrderController;
/* =============== Front Routes =============== */


Route::get('/', [MainController::class,  'index'])->name('home');

Route::get('categories', [ProductCategoryController::class, ''])->name('categories');
Route::get('category/{category:slug}/products', [ProductsController::class, 'index'])->name('products');
Route::get('category/{category:slug}/product/{product:slug}', [ProductController::class, 'show'])->name('product_show');

// Route::middleware(['auth'])->group(function(){
   
    Route::name('profile.')->group(function(){
        Route::get('profile', [ProfileController::class, 'index'])->name('main');
        Route::get('profile/{user:slug}/cart', [CartController::class, 'index'])->name('cart');
        Route::get('profile/{user:slug}/wishlist', [WishlistController::class, 'index'])->name('wishlist');
        Route::get('profile/{user:slug}/order', [OrderController::class, ''])->name('order');
    });

    Route::prefix('admin')->group(function(){

    });

// });

Route::get('news', [NewsController::class, 'index'])->name('news'); // новости

Route::get('search', [SearchController::class, ''])->name(''); // резултать поиска

Route::name('info.')->group(function(){
    Route::get('about', [InfoController::class, 'about'])->name('about'); // о магазин
    Route::get('conditions', [InfoController::class, 'conditions'])->name('conditions'); // условия
    Route::get('delivery', [InfoController::class, 'delivery'])->name('delivery'); // доставка
    Route::get('rastrochka', [InfoController::class, 'rastrochka'])->name('rastrochka'); // растрочка
    Route::get('vozvrat', [InfoController::class, 'vozvrat'])->name('vozvrat'); // возврат
    Route::get('contact', [InfoController::class, 'contact'])->name('contact'); // contact
});