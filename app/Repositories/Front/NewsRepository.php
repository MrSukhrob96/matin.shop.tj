<?php

namespace App\Repositories\Front;

use App\Models\News;

class NewsRepository
{

    public $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function get_all_news($limit)
    {
        return $this->news->paginate($limit);
    }

    public function get_one_news($id)
    {
        return $this->news->where($id)->first();
    }

    public function get_sale_products_news()
    {
    }

    public function get_last_news($limit)
    {
        return $this->news->orderBy("created_at")->take($limit)->get();
    }
}
