<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 style="color: white; font-size: 30px;">Laravel掲示板</h1>
                <a href="{{ route('user.show', Auth::user()->id) }}"
                    style="color: white;  text-decoration-line: none;">プロフィール</a>
            </div>
        </nav>
        @if (session()->has('success'))
            <div class="alert alert-success" style="text-align: center;">{{ session()->get('success') }}</div>
        @endif
        <div style="margin: 10px; text-align:center;">
            <a class="btn btn-primary" href="{{ route('post.create') }}"
                style="font-size: 20px;">投稿フォーム</a>
        </div>

        @foreach ($posts as $post)
        <div style="margin: 20px;">
            <div class="card" style="width: 48rem; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->User->name }}</h5>
                    <h5 class="card-title"><a href="{{ route('post.show', $post->id) }}"
                            style="color: black; text-decoration-line: none;">{{ $post->title }}</a></h5>
                    <p class="card-text">{{ $post->comment }}</p>
                    <div style="display:flex;">
                        <a href="{{ route('comment.create', ['post_id' => $post->id]) }}"
                            style="text-decoration-line: none;">コメントする</a>

                        @if ($post->is_liked_by_auth_user())
                            @foreach ($post->Like as $like)
                                @if ($like->user_id == Auth::user()->id)
                                    <form method="POST" action="{{ route('like.destroy', $like->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-success">いいね済み</button></td>
                                    </form>
                                @endif
                            @endforeach
                        @else
                            <form method="POST" action="{{ route('like.store', $post->id) }}">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button class="btn btn-secondary">いいねする</button></td>
                            </form>
                        @endif
                    </div>
                    @if ($post->user_id == Auth::user()->id)
                        <div style="display:flex;">
                            <a href="{{ route('post.edit', $post->id) }}" style="text-decoration-line: none;">編集</a>
                            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                                @csrf
                                @method('DELETE')
                                <button style="color: red; border: none; background: transparent;">削除</button></td>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
            @foreach ($post->Comment as $comment)
            <div class="card" style="width: 40rem; margin: 0 auto;            ">
                <div class="card-body">
                        <p class="card-text">{{ $comment->User->name }}</p>
                        <p class="card-text">{{ $comment->comment }}</p>
                    </div>
                    @if ($comment->user_id == Auth::user()->id)
                        <div style="display: flex;">
                            <a href="{{ route('comment.edit', $comment->id) }}"
                                style="text-decoration-line: none;">編集</a>
                            <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                                @csrf
                                @method('DELETE')
                                <button style="color: red; border: none; background: transparent;">削除</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        @endforeach
    </div>

</body>

</html>
