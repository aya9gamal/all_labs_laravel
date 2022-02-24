@extends('layoutinherit.header')
<div class="container mt-3">
  <!-- dd({{$cates}}); -->
 <!-- <a href="/create">create</a> -->
<h1>Hello {{auth()->user()->name}}</h1>
 <a href="{{route('category.create')}}" class="btn btn-info">create</a>
  <h2>Categories</h2>
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>action</th>
        <th>action</th>
        <th>action</th>
        <!-- <th>sort_wear</th>
        <th>other</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($cates as $cate)
      <tr>
        <td>{{$cate->id}}</td>      
        <td>{{$cate->name}}</td>    

<td><a href="/detais_cate/{{$cate->id}}" class="btn btn-info mt-3">Show</a></td>
   <td>  <a href="/delete_cate/{{$cate->id}}" class="btn btn-info">Delete</a></td>    
     <td>  <a href="/cate/{{$cate->id}}/edit" class="btn btn-info">Update</a></td>
        </tr> 
      @endforeach   
    </tbody>
  </table>
  {{ $cates->links() }}
</div>

 <!-- <td>
       <from style="display:inline;" method="POST" action="/delete/{{$cate['id']}}">
        @method('DELETE') -->
         <!-- @csrf 
         <input type="hidden" name="_method" value="DELETE"/>
     <button class="btn btn-secondary" type="submit">Delete</button>
      </form>
  </td>  -->  

</body>
</html>
