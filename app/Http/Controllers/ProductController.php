<?php

namespace App\Http\Controllers;

use App\Categories;
use App\MyHelpers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('dashboard.products.index',[
            'products' => $products //Отдаём шаблон
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Валидация данных
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $data = $request->all();
        $data['alias'] = date('d-m-Y') . '-' . MyHelpers::str2url($data['title']);
        //$data['category_id'] = Categories::id();

        //dd($request);
        //dd($data);
        if($request->hasFile('thumb')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('thumb');

            //Задаем уникальное имя использую временнную метку и рандомайзер
            //getClientOriginalExtension() - получаем расширение передаваемого файла
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();

            //Путь где будет храниться наше изображение
            //public_path($str) - обращается к корню public клиентской части
            //принимает доп. параметр  пути внутри public
            $location = public_path(env('URL_IMAGE_PRODUCTS') . $filename);

            //локальное размещение
            //Режим и сохраняем в нашей папке
            Image::make($image)->resize(330, 380)->save($location);
            // Image::make($image)->resize(50, 60)->save(env('URL_IMAGE_PRODUCTS') . '/mini_' . $location);
            // $all = $request->all();
            $data['thumb'] = $filename;
        }

        try{
            Product::create($data);
            $message = 'Запись успешно добавлена в базу!';
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('products.index');
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
        return view('dashboard.products.edit', [
            'prod' => Product::find($id) //получаем единственную запись c помощью find по id
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
        //Находим экземпляр продукта по id
        $prod = Product::find($id);
        //Получаем все данные из форм
        $data = $request->all();
        //Работа с картинкой
        if($request->hasFile('thumb')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('thumb');
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();
            $location = public_path( env('URL_IMAGE_PRODUCTS') . $filename);
            Image::make($image)->resize(330, 380)->save($location);
            //удаляем старый файл из папки
            // unset(env('URL_IMAGE_PRODUCTS') . $novost->img);
            $data['thumb'] = $filename;
        }

        try{
            $prod->update($data);
            $message = "Продукт {$prod->title} успешно обновлён!";
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('products.index');
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
            Product::find($id)->delete();
            $message = "Запись успешно удалена!";
        }catch (\Exception $e){
            $message = '<b>Ошибка: </b>' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('products.index');
    }
}
