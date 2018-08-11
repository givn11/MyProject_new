<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Menu;
use App\News;
use App\Product;
use Illuminate\Http\Request;

class MainController extends BaseController
{
    public function index(){

        $products = Product::all();
        $menus = Menu::all();
        $categories = Categories::all();

        return view('shop.index', [
            // 'news' => $news,
            'products' => $products,
            'menus' => $menus,
            'categories' => $categories
        ]);
    }

    public function getNews(){

        $news = News::all();
        $menus = Menu::all();
        $categories = Categories::all();

        return view('shop.news', [
            'news' => $news,
            'menus' => $menus,
            'categories' => $categories,
        ]);
    }
}