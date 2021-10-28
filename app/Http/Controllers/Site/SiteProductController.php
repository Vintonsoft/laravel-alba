<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class SiteProductController extends Controller
{
    //Ürün Listesi
    public function index($seo_url)
    {
        $category = Category::where('seo_url',$seo_url)->first();
        if($category)
        {
            $data = Product::where('cat_ID',$category->id)->get();
            return view('Site.Product.index',compact('data','category'));
        }
    }

    //Ürün Detayı
    public function detail($seo_url)
    {
        $data = Product::where('seo_url',$seo_url)->first();
        if($data)
        {
            return view('Site.Product.detail', compact('data'));
        }
        abort(404);
    }
}
