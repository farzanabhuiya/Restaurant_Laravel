<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Helpers\uploadMedia;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    use SlugGenerator,uploadMedia;

    function restaurantAdd(){
      $categories=Category::latest()->get(); 
      return view('backend.Restaturant.Restaurant',compact('categories'));
    }

    
   function restaurantStore (Request $request){
    $title=$this->generateslug($request->title,Restaurant::class);


    // $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featured_img->extension();
    // $request->featured_img->storeAS('restaurant',$fileName,'public');
     $fileName=$this->singleMedia($title,$request->featured_img);
   

   $restu=new Restaurant();
   $restu->title=$request->title;
   $restu->slug=$title;
   $restu->user_id=auth()->user()->id;
   $restu->category_id=$request->category;
   $restu->featured_img=$fileName;
   $restu->content=$request->content;
   $restu->save();
    return back();
 }





 function restaurantAll(){
   $restaurants=Restaurant::where('user_id',auth()->user()->id)->get();
  
   return view('backend.Restaturant.resaturantViewAll',compact('restaurants'));
 }
}
