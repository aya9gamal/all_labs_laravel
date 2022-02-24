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

<div class="container mt-3">
<p>Create Category page</p>
    <!-- <form method="POST" action="/cats/save"> -->
    <form method="POST" action="{{route('category.save')}}">
    @csrf
    <!-- @method('PUT'); -->
        Name: <input type="text" name="name" class="form-control">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <button type="submit" class="btn btn-info mt-3">Save</button>
        <!-- <input type="submit" value="save"/> -->
    </form>
</div>

</body>
</html>
