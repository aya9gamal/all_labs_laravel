<?php

namespace App\Http\Controllers\Api;
use  App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function index(){
      $article=Article::all(); 
      return response()->json($article);
   }
   public function show($id){
        
    $article = Article::findOrFail($id);  
return   response()->json($article);
}
public function delete($id){
    $article = Article::where('id','=', $id)->get(); 
    $article = Article::find($id)->delete();      
    return response()->json($article);
}
public function update(Request $request){
    $article=Article::find($request->id);        
    $article->name=$request->name;
    $article->details=$request->details;
    $article->slug=$request->slug;
    $article->cate_id=$request->cate_id;
    $article->is_used=$request->is_used;
    $result=$article->save();
if($result){
    return response()->json($article);
}
    
}

}
