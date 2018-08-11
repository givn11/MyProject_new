@extends('dashboard.app')

@section('content')
    <h1>Редактирование продукта</h1>
    <hr>

    <form method="POST" enctype="multipart/form-data" action="{{ route('products.update', ['id' => $prod->id]) }}">
        {{ csrf_field() }}
        {{--Чтобы работало редактирование--}}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="title">Название продукта</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $prod->title }}">
        </div>

        {{--<input type="hidden" name="img" value="default.jpg" class="form-control" id="">--}}

        {{--<input type="hidden" name="user_id" value="1" class="form-control" id="">--}}

        <div class="form-group">
            <label for="description">Описание продукта</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{ $prod->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Цена</label>
            <textarea name="price" class="form-control" id="price" rows="3">{{ $prod->price }}</textarea>
        </div>

        <div class="form-group">
            <label for="quantity">Количество</label>
            <textarea name="quantity" class="form-control" id="quantity" rows="3">{{ $prod->quantity }}</textarea>
        </div>

        <div class="form-group">
            <label for="alias">Картинка</label>
            <img width="150" src="{{ env('URL_IMAGE_PRODUCTS') . $prod->thumb }}" alt="">
            <input type="file" name="thumb" class="form-control" id="thumb" value="">
        </div>

        <div class="form-group">
            <label for="category_id">Категория товара</label>
            <textarea name="category_id" class="form-control" id="category_id" rows="3">{{ $prod->category_id }}</textarea>
        </div>

        <div class="form-group">
            <label for="brand_id">Бренд</label>
            <textarea name="brand_id" class="form-control" id="brand_id" rows="3">{{ $prod->brand_id }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Редактировать
        </button>

    </form>

@endsection
