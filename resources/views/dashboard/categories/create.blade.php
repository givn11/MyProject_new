@extends('dashboard.app')

@section('content')
    <h1>Добавить категорию</h1>
    <hr>

    <form method="POST" enctype="multipart/form-data" action="{{ route('categories.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название категории</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Добавить
        </button>

    </form>

@endsection