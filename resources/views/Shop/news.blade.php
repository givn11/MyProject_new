@extends('shop.layouts.app')

@section('title')
    Новости нашего сайта
@endsection

@section('content')
    @foreach($news as $item)
        <li>{{ $item->title }}</li>
    @endforeach
@endsection
{{--
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
--}}