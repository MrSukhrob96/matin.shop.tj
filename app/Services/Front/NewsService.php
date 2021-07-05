<?php

namespace App\Services\Front;

use App\Models\News;
use App\Repositories\Front\NewsRepository;

class NewsService
{

    public $news;

    public const LAST_NEWS_LIMIT = 3;

    public const LIMIT_PAGINATION = 12;


    public function __construct(
        NewsRepository $news
    ) {
        $this->news = $news;
    }

    public function one_news()
    {
    }

    public function all_news()
    {
        return $this->news->get_all_news(self::LIMIT_PAGINATION);
    }

    public function last_news()
    {
        return  $this->news->get_last_news(self::LAST_NEWS_LIMIT);
    }
}
