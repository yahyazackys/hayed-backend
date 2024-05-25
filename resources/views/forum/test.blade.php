@extends('template')

@section('content')
    <div class="post mb-8" style="border-bottom: 5px; color: black">
        {{-- @foreach ($forum as $f) --}}
        <h2>{{ $forum->title }}</h2>
        <p>{{ $forum->content }}</p>
        {{-- @endforeach --}}
    </div>

    <div class="comments">
        <h3>Komentar</h3>
        @foreach ($forum->comments as $comment)
            <div class="comment">
                <div class="container">
                    <div class="row">
                        <small>{{ $comment->user->name }}</small>
                        <p>{{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y') }}</p>
                    </div>
                </div>
                <p>{{ $comment->content }}</p>

                @if ($comment->replies->count() > 0)
                    <div class="replies">
                        <h4>Balasan:</h4>
                        @foreach ($comment->replies as $reply)
                            <div class="reply">
                                <p>{{ $reply->content }}</p>
                                <small>Posted by: {{ $reply->user->name }}</small>
                            </div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('comment-store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                    <!-- Menyimpan parent_id untuk balasan -->
                    <textarea name="content" rows="4"></textarea>
                    <button type="submit">Balas Komentar</button>
                </form>
            </div>
        @endforeach
    </div>

    <section class="gradient-custom">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">{{ $forum->title }}</h4>

                            <div class="row">
                                <div class="col">
                                    @foreach ($forum->comments as $comment)
                                        @if ($comment->replies->count() == 0)
                                            <div style="display: none">nodata</div>
                                        @else
                                            <div class="d-flex flex-start mb-5">
                                                {{-- <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                                alt="avatar" width="65" height="65" /> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" alt="avatar" width="50"
                                                    height="50" fill="currentColor"
                                                    class="bi bi-person rounded-circle shadow-1-strong me-3"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                                </svg>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                                {{ $comment->user->name }} <span class="small">-
                                                                    {{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y') }}</span>
                                                            </p>
                                                            <a href="#!"><i class="fas fa-reply fa-xs"></i><span
                                                                    class="small"> reply</span></a>
                                                        </div>
                                                        <p class="small mb-0">
                                                            {{ $comment->content }}
                                                        </p>


                                                    </div>

                                                    @if ($comment->replies->count() > 0)
                                                        @foreach ($comment->replies as $reply)
                                                            <div class="d-flex flex-start mt-4">
                                                                {{-- <a class="me-3" href="#">
                                                        <img class="rounded-circle shadow-1-strong"
                                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp"
                                                            alt="avatar" width="65" height="65" />
                                                    </a> --}}

                                                                <svg xmlns="http://www.w3.org/2000/svg" alt="avatar"
                                                                    width="50" height="50" fill="currentColor"
                                                                    class="bi bi-person rounded-circle shadow-1-strong me-3"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                                                </svg>
                                                                <div class="flex-grow-1 flex-shrink-1">
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <p class="mb-1">
                                                                                {{ $reply->user->name }} <span
                                                                                    class="small">-
                                                                                    3 hours
                                                                                    ago</span>
                                                                            </p>
                                                                        </div>
                                                                        <p class="small mb-0">
                                                                            {{ $reply->content }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif



                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
