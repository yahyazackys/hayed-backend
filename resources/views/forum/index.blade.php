@extends('template')

@section('content')
    <h1>Forum</h1>
    @foreach($forums as $forum)
        <div>
            
            <h2><a href="{{ route('forum-show', $forum->id) }}">{{ $forum->title }}</a></h2>
<<<<<<< HEAD
            <p>{{ $forum->content }}</p>yahya
=======
            <p>{{ $forum->content }}</p>
>>>>>>> c1748c8 (terbaru)
        </div>
    @endforeach
@endsection
