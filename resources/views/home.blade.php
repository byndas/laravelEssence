@extends('master')

@section('title', 'Homepage')

@section('content')
Post Message
<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="content">
    {{ csrf_field() }}
    <button type="submit">Submit</button>
</form>

Recent Messages:

<ul>
    @foreach($messages as $message)
    <li>
        <strong>
            {{ $message->title }}
        </strong>
        <br>
        {{ $message->content }}
        <br>
        {{ $message->created_at->format('d/m/Y H:i') }}
        <br>
        {{ $message->created_at->diffForHumans() }}
        <br>
        <a href="/message/{{ $message -> id }}"></a>

    </li>
    @endforeach
</ul>
@endsection
