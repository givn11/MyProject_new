@extends('dashboard.app')

@section('content')
    <h1>Редактирование новости "{{ $categ->title }}"</h1>
    <hr>
    {{--Роут для обновления новости. В метод route можно передавать массив значений--}}
    <form method="POST" enctype="multipart/form-data" action="{{ route('categories.update', ['id' => $categ->id]) }}">
        {{ csrf_field() }}
        {{--Чтобы работало редактирование--}}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="title">Название категории</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $categ->title }}">
        </div>


        {{--<input type="hidden" name="user_id" value="1" class="form-control" id="">--}}

        <div class="form-group">
            <label for="introtext">Описание</label>
            <textarea name="introtext" class="form-control" id="introtext" rows="3">{{$categ->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Редактировать
        </button>

    </form>

@endsection