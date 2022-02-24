<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Article;
use   App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
class ArticleController extends Controller
{
    //
    public function index(){
        //   $article=Article::all();       
        $article=Article::paginate(5);  
       
        return view('article',['articles'=> $article]);
    }
    public function create(){
        $cate_ids=Category::all();
      return view('create_article',['cate_ids'=>$cate_ids]);
    }
    public function save(StoreArticleRequest $request){
        $article=new Article;
        // $article = Article::find(1);        
        // $article->addMedia($request->image);
        // $article->toMediaCollection();
        $article->name=$request->name;
        $article->details=$request->details;
        $article->slug=$request->slug;
        $article->cate_id=$request->cate_id;
         $article->save();
        return redirect('/article',);
    }
    public function edit($id){
        $article = Article::findOrFail($id);
        return view('edit_article',['article'=>$article]);
    }
    public function update(StoreArticleRequest $request){
        $article=Article::find($request->id);        
        $article->name=$request->name;
        $article->details=$request->details;
        $article->slug=$request->slug;
        $article->cate_id=$request->cate_id;
        $article->is_used=$request->is_used;
        $article->save();       
       return redirect('/article');
        // return $request->name;        
    }
    public function delete($id){
        $article = Article::where('id','=', $id)->get(); 
        $article = Article::find($id)->delete();      
        return redirect('/article');
    }
    public function show($id){
        
        $article = Article::findOrFail($id);
        // $category_data=Category::findOrFail($article['cate_id']);   
    //  return  view ('article_details',['data' =>$article],['category_data' =>$category_data]);
    return  view ('article_details',['data' =>$article]);
    }
    
   
}
