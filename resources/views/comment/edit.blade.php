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
    <form method="POST" action="/comment/{{ $comment->id }}">
        @csrf
        @method('PATCH')
          <div class="form-floating">
            <textarea class="form-control" id="comment" name="comment" style="height: 100px">{{ old('content', $comment->comment) }}</textarea>
            <label for="content">内容</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>
