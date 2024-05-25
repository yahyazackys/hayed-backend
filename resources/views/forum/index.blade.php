@extends('template')

@section('content')
    <h1>Forum</h1>
    @foreach($forums as $forum)
        <div>
            
            <h2><a href="{{ route('forum-show', $forum->id) }}">{{ $forum->title }}</a></h2>
            <p>{{ $forum->content }}</p>
        </div>
    @endforeach
@endsection
