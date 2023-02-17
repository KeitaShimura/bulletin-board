<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @if (session()->has('success'))
    <div class="alert alert-success" style="text-align: center;">{{ session()->get('success') }}</div>
    @endif
    <a href="{{ route('post.create') }}">投稿フォーム</a>

    @foreach($posts as $post)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></h5>
          <p class="card-text">{{$post->comment}}</p>
          @if($post->user_id == Auth::user()->id)
          <a href="{{ route('post.edit', $post->id) }}">編集</a>
          <form method="POST" action="{{ route('post.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">削除</button></td>
        </form>
        @endif
        <a href="{{ route('comment.create', ['post_id' => $post->id]) }}">コメントする</a>


        <form method="POST" action="{{ route('like.store', $post->id) }}">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <button class="btn btn-secondary">いいねする</button></td>
        </form>
      </div>
    </form>
    @foreach($post->Comment as $comment)
            <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $comment->comment }}</p>
                </div>
                @if($comment->user_id == Auth::user()->id)
                <a href="{{ route('comment.edit', $comment->id) }}">編集</a>
                <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">削除</button></td>
                </form>
                @endif
            </div>

        @endforeach
      @endforeach

</body>
</html>
