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
    <div style="width: 48rem; margin: 0 auto; margin-top: 30px;">
        @error('title')
            <div class="alert alert-danger" style="text-align: center;">{{ $message }}</div>
        @enderror
        @error('comment')
            <div class="alert alert-danger" style="text-align: center;">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="form-floating" style="margin-bottom: 10px;">
                <input class="form-control" id="title" name="title">
                <label for="title">タイトル</label>
            </div>
            <div class="form-floating" style="margin-bottom: 10px;">
                <textarea class="form-control" id="comment" name="comment" style="height: 100px"></textarea>
                <label for="content">内容</label>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">投稿</button>
            </div>
        </form>
        <div style="text-align: center; margin-top:10px;">
            <a href="{{ route('post.index') }}" class="btn btn-secondary">戻る</a>
        </div>
    </div>
</body>

</html>
