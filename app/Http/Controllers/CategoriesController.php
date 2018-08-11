<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Menu;
use App\MyHelpers;
use App\News;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::orderBy('id', 'asc')->get();
        return view('dashboard.categories.index',[
            'categories' => $categories //Отдаём шаблон
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        $data = $request->all();
        $data['alias'] = date('d-m-Y') . '-' . MyHelpers::str2url($data['title']);

        //dd($request);
        //dd($data);

        try{
            Categories::create($data);
            $message = 'Запись успешно добавлена в базу!';
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.categories.edit', [
            'categ' => Categories::find($id) //получаем единственную запись c помощью find по id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Находим экземпляр категории по id
        $categ = Categories::find($id);
        //Получаем все данные из форм
        $data = $request->all();

        try{
            $categ->update($data);
            $message = "Категория {$categ->title} успешно обновлена!";
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            //Удаление запиcи
            Categories::find($id)->delete();
            $message = "Запись успешно удалена!";
        }catch (\Exception $e){
            $message = '<b>Ошибка: </b>' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('categories.index');
    }
    public function showCategoryByAlias(Request $request, $alias){
        $news = News::orderBy('id', 'desc')->get();
        $menus = Menu::all();
        $categories = Categories::all();
        $category = Categories::find(1)->where('alias', $alias)->first();
        $products = Product::where('category_id', $category->id)->paginate(3);

        //dump($products);

        return view('shop.category', [
            'news'=> $news,
            'menus' => $menus,
            'category' => $category,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
