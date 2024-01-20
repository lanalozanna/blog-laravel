@extends('layouts.app')

@section('title','ВЗРЫВ МОЗГА.Ч.1')
@section('header', 'О боги')
@section('content')
    <p>эксперименты с ларавелью на хекслете</p>
    @foreach ($tags as $pup)
        <p>kukaracha pupla {{$pup}}</p>
    @endforeach
@endsection
