<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Front\CategoryService;

class InfoController extends Controller
{
    public function __construct(
        CategoryService $categories
    )
    {
        $this->categories = $categories;
    }

    public function about()
    {
        return view('front.about.index', array(
            "categories" => $this->categories->all_categories(),
        ));

    }
    public function conditions()
    {
        return view('front.info.index', array(
            "categories" => $this->categories->all_categories(),
        ));
    }

    public function delivery()
    {
        return view('front.info.index', array(
            "categories" => $this->categories->all_categories(),
        ));
    }

    public function rastrochka()
    {
        return view('front.info.index', array(
            "categories" => $this->categories->all_categories(),
        ));
    }

    public function vozvrat()
    {
        return view('front.info.index', array(
            "categories" => $this->categories->all_categories(),
        ));
    }

    public function contact()
    {
        return view('front.contact.index', array(
            "categories" => $this->categories->all_categories(),
        ));
    }
}
