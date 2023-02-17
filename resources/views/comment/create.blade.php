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
    <form method="POST" action="{{ route('comment.store') }}">
        @csrf
          <div class="form-floating">
            <input type="hidden" name="post_id" value="{{ $post_id }}">
            <textarea class="form-control" id="comment" name="comment" style="height: 100px"></textarea>
            <label for="content">内容</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>
