<?php


namespace App\Http\Helpers;

use Illuminate\Support\Str;


trait SlugGenerator {
    public function generateslug($title,$model){
    $count=$model::where('slug','LIKE','%'.Str::slug($title).'%')->count();
    if($count>=0){
       $count++;
       $slug=Str::slug($title). '-' . $count;
       return $slug;
    }else{
    
    $slug=Str::slug($title);
     return $slug;
    }
}
}