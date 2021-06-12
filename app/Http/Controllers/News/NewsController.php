<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Front\NewsService;
use App\Services\Front\CategoryService;

class NewsController extends Controller
{

    public $news;
    public $categories;

    public function __construct(
        NewsService $news,
        CategoryService $categoryService
    ) {
        $this->news = $news;
        $this->categories = $categoryService;
    }

    public function index()
    {
        return view("front.news.index", array(
            "news" => $this->news->all_news(),
            "categories" => $this->categories->all_categories()
        ));
    }
}
