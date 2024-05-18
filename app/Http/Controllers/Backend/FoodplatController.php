<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Helpers\uploadMedia;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;
use App\Models\Foodplat;
use Illuminate\Support\Str;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\Regex;

class FoodplatController extends Controller
{
    use SlugGenerator;
    
    function foodplatAdd(){
        $categories=Category::latest()->get(); 
        return view('backend.FoodPlat.FoodPlatAdd',compact('categories'));
    }

    function foodplatAddStore(Request $request){
        $title=$this->generateslug($request->title,Foodplat::class);
         $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featured_img->extension();
         $request->featured_img->storeAS('foodplat',$fileName,'public');
        //$fileName=$this->singleMedia($title,$request->featured_img);
       $foodplat=new Foodplat();
       $foodplat->title=$request->title;
       $foodplat->slug=$title;
       $foodplat->user_id=auth()->user()->id;
       $foodplat->category_id=$request->category;
       $foodplat->featured_img=$fileName;
       $foodplat->content=$request->content;
       $foodplat->save();
        return back();
    }
    function foodplatAll(){
        $foodplats=Foodplat::where('user_id',auth()->user()->id)->get();
        return view('backend.FoodPlat.FoodPlatViewAll',compact('foodplats'));
       
    }
}
