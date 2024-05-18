<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

use SlugGenerator;

function addviewCategory(){
return view('backend.Category.AddCategory');
}

function addcategory( Request $request){

$category =New Category();
$category->title=$request->title;
$editcategory=null;

// $count=Category::where('slug','LIKE', '%'.str($request->title)->slug() .'%')->count();
// if($count>0){
//    $count++;
//    $slug=str($request->title)->slug() . '-' . $count;
// }else{
//   $slug= str($request->title)->slug();
// }
 
$category->slug=$this->generateslug($request->title, Category::class);
$category->save();
 $categories= Category::latest()->paginate(2);

return view('backend.Category.ViewCategory',compact('editcategory','categories'));
}

function viewcategory(){
  $categories= Category::latest()->paginate();
  
$editcategory=null;
 return view('backend.Category.ViewCategory',compact('categories','editcategory'));
}

function editcategory($slug){
  $categories= Category::latest()->paginate();

$editcategory= Category::where('slug', $slug )->first();
 return view('backend.Category.edit',compact('categories','editcategory'));
}




function updatecategory( Request $request,$slug){
  
  $editcategory= Category::where('slug', $slug )->first();
  $editcategory->title=$request->title;
  $editcategory->save();
  $categories= Category::latest()->paginate(2);
  return view('backend.Category.ViewCategory',compact('categories'));
}


}
