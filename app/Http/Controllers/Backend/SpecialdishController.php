<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Specialdish;
use Illuminate\Http\Request;
use App\Http\Helpers\uploadMedia;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SpecialdishController extends Controller
{
    use SlugGenerator;
    
    function specialdishAdd(){
        $categories=Category::latest()->get(); 
        return view('backend.SpecialDish.SpecialDish',compact('categories'));
    }

    function specialdishAddStore(Request $request){

        $title=$this->generateslug($request->title,Specialdish::class);
         $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featured_image->extension();
        $request->featured_image->storeAS('Specialdish',$fileName,'public');
        // $fileName=$this->singleMedia($title,$request->featured_image);
       
    
       $specialdish=new Specialdish();
       $specialdish->title=$request->title;
       $specialdish->slug=$title;
       $specialdish->user_id=auth()->user()->id;
       $specialdish->category_id=$request->category;
       $specialdish->featured_img=$fileName;
       $specialdish->content=$request->content;
       $specialdish->save();
        return back();
    }


    function specialdishAll(){
        $specialdish=Specialdish::where('user_id',auth()->user()->id)->get();
       
       return view('backend.SpecialDish.SpecialDishViewAll',compact('specialdish'));
      }
}
