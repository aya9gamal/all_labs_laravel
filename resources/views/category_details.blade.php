<!--category_details -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
<div class="card">
  <div class="card-header">      
 ID: {{$data['id']}}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
     <p> Name category : {{$data['name']}}</p> 
     <h2>related</h2>
    @foreach($array as $d )
   <p>article id : {{$d['id']}}</p> 
    <p>article name : {{$d['name']}}</p> 
    <p>article details : {{$d['details']}}</p> 
    <p>article slug : {{$d['slug']}}</p> 
    <p>article  is_used: {{$d['is_used']}}</p> 
    @endforeach      
    </blockquote>
  </div>
  <!-- <a href="/" class="btn btn-primary">Back to</a> -->
</div>
<a href="/" class="btn btn-primary mt-3">Back to</a>
</div>

</body>
<html>