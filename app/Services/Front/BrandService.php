<?php

namespace App\Services\Front;

use App\Models\Brand;
use App\Models\Category;

class BrandService
{

    public $brands;
    public const LIMIT_BRANDS = 12;
    
    public function __construct(
        Brand $brands
    ) {
        $this->brands = $brands;
    }

    public function sub_category_brands($category_slug)
    {
        if($category_slug !== 'all'){
            $category = Category::where("slug", $category_slug)->first();
            return $this->brands->whereHas('sub_categories', function($query) use($category){
                $query->where("sub_category_id", $category->id);
            })->get();
        }

        return $this->brands->orderBy("name")->get();
    }

    public function all_brands()
    {
        return $this->brands->paginate(self::LIMIT_BRANDS);
    }

}
