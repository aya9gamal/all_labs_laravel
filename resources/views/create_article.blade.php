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
{{ implode('', $errors->all('<div>:message</div>')) }}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<!-- var_dump({{$cate_ids[0]['id']}}) -->
<div class="container mt-3">
<p>Create article page</p>
    <form method="POST" action="/article/save" enctype="multipart/form-data">
    @csrf
    
    
    <!-- @method('PUT'); -->      
    <!-- ID: <input type="text" name="id"> -->
    Name: <input type="text" name="name" class="form-control">
    @if($errors->has('name'))
   
    <div class="error">{{ $errors->first('name') }}</div>
@endif
    details: <input type="text" name="details" class="form-control">
    @if($errors->has('details'))
    <div class="error">{{ $errors->first('details') }}</div>
@endif
    slug: <input type="text" name="slug" class="form-control">
    @if($errors->has('slug'))
    <div class="error">{{ $errors->first('slug') }}</div>
@endif
   
    <!-- cate_id: <input type="text" name="cate_id">   -->
    <label for="cars">Choose a category:</label>
    <select name="cate_id" id="cate_id" class="form-select">
        @foreach($cate_ids as $category_id)
        <option value="{{$category_id['id']}}">{{$category_id['name']}}</option>
        @endforeach        
        </select> 
  <br><br>  
    @if($errors->has('cate_id'))
    <div class="error">{{ $errors->first('cate_id') }}</div>
@endif
<!-- IMage: <input type="file" name="image" class="form-control"> -->
        <button type="submit" class="btn btn-info mt-3">Submit</button>
    </form>
</div>

</body>
</html>
