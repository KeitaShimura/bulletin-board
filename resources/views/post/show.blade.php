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
    @include('layouts.header')
    <div style="margin-top: 20px;">
        <div class="card" style="width: 80%; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->User->name }}</a></h5>
                <h5 class="card-title">{{ $post->title }}</a></h5>
                <p class="card-text">{{ $post->comment }}</p>
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top:10px;">
        <a href="{{ route('post.index') }}" class="btn btn-secondary">戻る</a>
    </div>
</body>

</html>
