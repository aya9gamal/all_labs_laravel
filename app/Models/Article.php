<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
// use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

use App\Models\Category;
class Article extends Model 
{
    use HasFactory;
    public function Category()
    {
        
        return $this->belongsTo("App\Models\Category",'cate_id','id');
        
    }
    // use InteractsWithMedia;
    // use HasMediaTrait;
}
