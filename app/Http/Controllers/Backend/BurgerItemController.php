<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Helpers\uploadMedia;
use App\Models\Backend\Burgeritem;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;
use App\Models\Backend\Burger;
use Illuminate\Support\Str;

class BurgerItemController extends Controller
{
   
    use SlugGenerator,uploadMedia;

    function burgerItem(){
        $categories=Category::latest()->get();
        $burgeritems=Burgeritem::latest()->get();
        return view('backend.Burger.BurgerAdd',compact('categories','burgeritems'));
    }
    function BurgerItemAddTitle(Request $request){
        $burgeritem  =new Burgeritem();
        $burgeritem->title=$request->title;
        $burgeritem->content=$request->content;
        $burgeritem->save();
        return back();
    }

    function BurgerItemstore(){
        $burges=Burgeritem::latest()->get();
        return view('backend.Burger.BurgerAllAdd',compact('burges'));
    }
    //burger
    function Burgerstore(Request $request){
     
        $title=$this->generateslug($request->produtc_name,Burger::class);
        $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featured_imga->extension();
        $request->featured_imga->storeAS('burger',$fileName,'public');
        // $fileName=$this->singleMedia($title,$request->featured_imga);
          
 
       $burger=new Burger();
       $burger->burgeritem_id=$request->burgeritem_id;
       $burger->slug=$title;
       $burger->user_id=auth()->user()->id;
       $burger->category_id=$request->category;
       $burger->produtc_name=$request->produtc_name;
       $burger->featured_img=$fileName;
       $burger->save();
        return back();
    }


    function Burgerall(){
        $burgers=Burger::where('user_id',auth()->user()->id)->get();
        return view('backend.Burger.BurgerViewAll',compact('burgers'));
    }
}
