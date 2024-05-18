<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Juico;
use App\Models\Juicoitem;
use App\Models\Posttitle;
use Illuminate\Http\Request;
use App\Models\Backend\Burger;
use App\Models\Backend\Burgeritem;
use App\Http\Controllers\Controller;
use App\Models\Foodplat;
use App\Models\Restaurant;
use App\Models\Specialdish;

class HomeController extends Controller
{
   function pageHome(){
   $reataurantes=Restaurant::latest()->get();
   $specialdish=Specialdish::latest()->get();
   $posttitle=Posttitle::with('Post')->get();
   
   $posts=Post::latest()->get();
 

   $burgeritems=Burgeritem::with('Burger')->get();

   $burger=Burger::latest()->get();

   $foodplats=Foodplat::latest()->get();

   $juicoitems=Juicoitem::with('Juico')->get();
   $juicos=Juico::latest()->get();




   return view('frontend.homePage',compact('reataurantes','specialdish','posttitle','posts','burgeritems','burger','foodplats','juicoitems','juicos'));

   }



   
}
