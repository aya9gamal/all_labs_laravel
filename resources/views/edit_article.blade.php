<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<div class="container mt-3">
<p>Create article page</p>
    <form method="POST" action="/edit_article/{{$article['id']}}">
    @csrf
    <input type="hidden" name="id" value="{{$article['id']}}" class="form-control">
        Name: <input type="text" name="name" value="{{$article['name']}}" class="form-control">
        details: <input type="text" name="details" value="{{$article['details']}}" class="form-control">
        slug: <input type="text" name="slug" value="{{$article['slug']}}" class="form-control">
        cate_id: <input type="text" name="cate_id" value="{{$article['cate_id']}}" class="form-control">
         is_used: <input type="text" name="is_used" value="{{$article['is_used']}}" class="form-control"> 
        <button class="btn btn-info mt-3">update</button>
    </form>
</div>

</body>
</html>
