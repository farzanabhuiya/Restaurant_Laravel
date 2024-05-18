<?php

namespace App\Http\Controllers\Backend;

use App\Models\Juico;
use App\Models\Category;
use App\Models\Juicoitem;
use Illuminate\Http\Request;
use App\Http\Helpers\uploadMedia;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class JuicoController extends Controller

{
  use SlugGenerator;
  
  function juicoitem(){
    $categories=Category::latest()->get();
    $juicoitems=Juicoitem::latest()->get();
    return view('backend.Juico.JuicoAdd',compact('categories','juicoitems'));
  }

  function juicoitemAddTitle(Request $request){
    $juicoitem  =new Juicoitem();
    $juicoitem->title=$request->title;
    $juicoitem->content=$request->content;
    $juicoitem->save();
    return back();
  }


  function juicostore(Request $request){
    $title=$this->generateslug($request->produtc_name,Juico::class);
    $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featured_pic->extension();
    $request->featured_pic->storeAS('juico',$fileName,'public');
  
    // $fileName=$this->singleMedia($title,$request->featured_pic);
      

   $juico=new Juico();
   $juico->juicoitem_id=$request->juicoitem_id;
   $juico->slug=$title;
   $juico->user_id=auth()->user()->id;
   $juico->category_id=$request->category;
   $juico->produtc_name=$request->produtc_name;
   $juico->featured_img=$fileName;
   $juico->conte=$request->conte;
   $juico->save();
    return back();
}

function juicoAll(){
  $juicos=Juico::where('user_id',auth()->user()->id)->get();
  return view('backend.Juico.JuicoViewAll',compact('juicos'));
}
}
