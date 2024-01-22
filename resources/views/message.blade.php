@extends('layouts.app')

@section('title','Сообщения')
@section('header', 'Кто чем дышит')
@section('content')
    <p>Наши драгоценные друзья:</p>
    <div>
        @foreach($mail as $message)
            <div>
                <h2>{{ $message->name }}</h2>
                <p>{{ $message->body }}</p>
            </div>
        @endforeach
        {{ $mail->links() }}
    </div>
    
@endsection