@extends('template')

@section('content')
    <h1>{{ $forum->title }}</h1>
    <p>{{ $forum->content }}</p>

    <hr>

    <h3>Komentar</h3>
    @foreach($comment->replies as $reply)
    <div style="margin-left: 20px;">
        <p>{{ $reply->content }} - <small>{{ $reply->user->name }}</small></p>
        <form action="{{ route('comments-like', $reply->id) }}" method="POST">
            @csrf
            <button type="submit">
                {{ $reply->likes->count() }} Like
            </button>
        </form>
        @include('forum.comment', ['comment' => $reply])
    </div>
@endforeach

<form action="{{ route('comments-store', $comment->forum_id) }}" method="POST" style="margin-left: 20px;">
    @csrf
    <textarea name="content" rows="2" required></textarea>
    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
    <button type="submit">Balas</button>
</form>

@endsection
