@extends('layouts.app')

@section('content')

   <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <ul>
            @foreach ($messages as $message)
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : > {{$message->titile }} {{ $message->content }}</li>
            @endforeach
        </ul>
    @endif
<!-- Write content for each page here -->

    {!! link_to_route('messages.create', '新規メッセージの投稿') !!}  
    
 
@endsection
