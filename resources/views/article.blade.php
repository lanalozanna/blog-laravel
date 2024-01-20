@extends('layouts.app')

@section('title','Статьи')
@section('header', 'ВСЕ СТАТЬИ')
@section('content')
    <p>Данные из таблицы:</p>
    <div>
        @foreach($data as $article)
            <div>
                <h2>{{ $article->name }}</h2>
                <p>{{ $article->body }}</p>
            </div>
        @endforeach
    </div>
    
@endsection