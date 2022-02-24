<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $products=[
        ['id'=>1,'name'=>"product 1",'price'=>100],
        ['id'=>2,'name'=>"product 2",'price'=>200],
        ['id'=>3,'name'=>"product 3",'price'=>300],
        ['id'=>4,'name'=>"product 4",'price'=>400],
        ['id'=>5,'name'=>"product 5",'price'=>500],
        ['id'=>6,'name'=>"product 6",'price'=>600],
        ['id'=>7,'name'=>"product 7",'price'=>700],
        ['id'=>8,'name'=>"product 8",'price'=>800],
        ['id'=>9,'name'=>"product 9",'price'=>900],
        ['id'=>10,'name'=>"product 10",'price'=>1000],
        ['id'=>11,'name'=>"product 11",'price'=>1100],
        ['id'=>12,'name'=>"product 12",'price'=>1200],
    ];  
    public  $cate=[
        ["phone 1","watches 1",'sport_wear1','other1'],
        ["phone 2","watches 2",'sport_wear2','other2'],
        ["phone 3","watches 3",'sport_wear3','other3'],
        ["phone 4","watches 4",'sport_wear4','other4'],
    ];
  
   public function Categories(){
                
       return view('home',['categes' => $this->cate],['products' => $this->products]);
   }
   public function Show($id){   
    //  dd($id);
    //,['product',$products[$id]]
    return  view ('product_details',['data' => $this->products[$id-1]]);
   }
   
}
