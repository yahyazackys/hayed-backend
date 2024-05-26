@extends('template')

@section('content')
    <h1>{{ $forum->title }}</h1>
    <p>{{ $forum->content }}</p>

    <hr>

    <h3>Komentar</h3>
    @foreach($forum->comments as $comment)
        <div style="margin-bottom: 20px;">
<<<<<<< HEAD
        <p>danil anjg babi</p>
=======
>>>>>>> c1748c8 (terbaru)
            <p>{{ $comment->content }} - <small>{{ $comment->user->name }}</small></p>
            <form action="{{ route('comments-like', $comment->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">{{ $comment->likes->count() }} Like</button>
            </form>
            <button onclick="toggleReplyForm({{ $comment->id }})">Balas</button>

            <!-- Form balasan untuk komentar utama -->
            <form id="reply-form-{{ $comment->id }}" action="{{ route('comments-store', $forum->id) }}" method="POST" style="display:none; margin-left: 20px; margin-top: 10px;">
                @csrf
                <textarea name="content" rows="2" required></textarea>
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                <button type="submit">Balas</button>
            </form>

            <div id="replies-{{ $comment->id }}">
                @foreach($comment->replies as $reply)
                    <div style="margin-left: 20px; border-left: 1px solid #ccc; padding-left: 10px; margin-top: 10px;">
                        <p>{{ $reply->content }} - <small>{{ $reply->user->name }} replied {{ $reply->parent->user->name }}</small></p>
                        <form action="{{ route('comments-like', $reply->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">{{ $reply->likes->count() }} Like</button>
                        </form>
                        <button onclick="toggleReplyForm({{ $reply->id }})">Balas</button>

                        <!-- Form balasan untuk balasan -->
                        <form id="reply-form-{{ $reply->id }}" action="{{ route('comments-store', $forum->id) }}" method="POST" style="display:none; margin-left: 20px; margin-top: 10px;">
                            @csrf
                            <textarea name="content" rows="2" required></textarea>
                            <input type="hidden" name="parent_id" value="{{ $reply->id }}">
                            <button type="submit">Balas</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    <form action="{{ route('comments-store', $forum->id) }}" method="POST">
        @csrf
        <textarea name="content" rows="4" required></textarea>
        <button type="submit">Tambah Komentar</button>
    </form>
@endsection

<script>
    function toggleReplyForm(commentId) {
        const replyForm = document.getElementById(`reply-form-${commentId}`);
        if (replyForm.style.display === 'none' || replyForm.style.display === '') {
            replyForm.style.display = 'block';
        } else {
            replyForm.style.display = 'none';
        }
    }

    function displayReplyForm(commentId, parentId) {
        const replyForm = document.getElementById(`reply-form-${parentId}`);
        const repliesDiv = document.getElementById(`replies-${parentId}`);
        
        // Tampilkan form balasan di bawah komentar yang menjadi target balasan
        replyForm.style.display = 'block';
        repliesDiv.appendChild(replyForm);

        // Tambahkan form balasan juga di bawah komentar utama
        const commentRepliesDiv = document.getElementById(`replies-${commentId}`);
        commentRepliesDiv.appendChild(replyForm);
    }
</script>
