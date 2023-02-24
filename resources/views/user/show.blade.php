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
    @if (session()->has('success'))
        <div class="alert alert-success" style="text-align: center;">{{ session()->get('success') }}</div>
    @endif
    <div style="margin-top: 20px;">
        <div class="card" style="width: 80%; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</a></h5>
                <p class="card-text">{{ $user->email }}</p>
                <a href="{{ route('user.edit', $user->id) }}">編集</a>
            </div>
        </div>
        <div style="text-align: center; margin-top:10px;">
            <a href="{{ route('post.index') }}" class="btn btn-secondary">戻る</a>
        </div>
    </div>
</body>

</html>
