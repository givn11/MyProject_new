<?php

namespace App\Http\Controllers;

use App\MyHelpers;
use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource. (список ресурсов)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Получаем все новости из базы данных
        $news = News::orderBy('id', 'desc')->get();
        return view('dashboard.news.index',[
           'news' => $news //Отдаём шаблон
        ]);
    }

    /**
     * Show the form for creating a new resource. (Отображает форму для создания ресурса)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage. (Обработчик запроса на создание ресурса)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            /*$novost = new News();
            $novost->title = $request->get('title');
            $novost->img = $request->get('img');
            $novost->save();*/
            //Валидация данных
            $request->validate([
                'title' => 'required|max:255',
                'introtext' => 'required',
                'text' => 'required',
            ]);

            $data = $request->all();
            $data['alias'] = date('d-m-Y') . '-' . MyHelpers::str2url($data['title']);
            $data['user_id'] = Auth::id();

            //dd($request);
            //dd($data);
        if($request->hasFile('img')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('img');

            //Задаем уникальное имя использую временнную метку и рандомайзер
            //getClientOriginalExtension() - получаем расширение передаваемого файла
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();

            //Путь где будет храниться наше изображение
            //public_path($str) - обращается к корню public клиентской части
            //принимает доп. параметр  пути внутри public
            $location = public_path(env('URL_IMAGE_PRODUCTS') . $filename);

            //локальное размещение
            //Режим и сохраняем в нашей папке
            Image::make($image)->resize(330, 380)->save(env('URL_IMAGE_PRODUCTS') .$location);
            // Image::make($image)->resize(50, 60)->save(env('URL_IMAGE_PRODUCTS') . '/mini_' . $location);
            // $all = $request->all();
            $data['img'] = $filename;
        }

        try{
            News::create($data);
            $message = 'Запись успешно добавлена в базу!';
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource. (Отображает конкретную запись)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. (Отображает форму для редактирования ресурса)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage. (Обновляет товар в БД. Обработчик обновления конкретного ресурса)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. (Удаление конкретного ресурса с БД)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
