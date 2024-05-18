<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\Category;
use App\Models\Posttitle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Helpers\uploadMedia;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    use SlugGenerator;
    
    function postAdd(){
        $categories=Category::latest()->get();
         $posttitles=Posttitle::latest()->get();

   
        return view('backend.Post.AddPost',compact('categories','posttitles'));
    }



        
     
    
    function postStore(Request $request){
        // dd($request->featureimg);
       $title=$this->generateslug($request->produtc_name,Post::class);
    //    $this->singleMedia($title,$request->featureimg);
 
    //    $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featureimg->extension();
       $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featureimg->extension();
       $request->featureimg->storeAS('post',$fileName,'public');

        $post=new Post();
        $post->posttitle_id=$request->posttitle_id;
       $post->slug=$title;
       $post->user_id=auth()->user()->id;
       $post->category_id=$request->category;
       $post->produtc_name=$request->produtc_name;
       $post->featured_img=$fileName;
       $post->save();
      return back();
    }
    function postall(){
        // $posts=Post::get();
      
        $posts=Post::where('user_id',auth()->user()->id)->get();
    return view('backend.Post.ViewAllPost',compact('posts'));
    }

    
    /////// EditPost 


function EditPost($slug){
    $editposts=Post::find('$slug');
    $editposts= Post::where('slug', $slug )->first();
   return view('backend.Post.EditPost',compact('editposts'));
}





    
function UpdatePostAll(Request $request,$slug){
   
        $title=$this->generateslug($request->produtc_name,Post::class);
        $fileName=Str::uuid().'.'.$request->produtc_name.'.'.$request->featureimg->extension();
        $request->featureimg->storeAS('post',$fileName,'public');
        //$fileName=$this->singleMedia($title,$request->featureimg);
        // $editposts= Post::where('slug', $slug )->first();
        $posts= Post::where('slug', $slug )->first();
        // $posts=Post::get();
        $posts->produtc_name=$request->produtc_name;
        $posts->featured_img=$fileName;
        $posts->save();
        return redirect()->route('Post.All');
    }

 function deletepost($id){
     Post::find($id)->delete();
     return back();
 }







        
    
    ////PostTitle,PostContent


    function postTitle(Request $request){
        $post=new Posttitle();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return back();
    }


    //  function postTitleStore(){
    //    $posttitles = Posttitle::first()->get();
    //      return view('backend.Post.viewPostTitle',compact('posttitles'));
    //  }
    }
