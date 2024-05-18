<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    

    function showprofile(){
        return view('backend.profile');
    }

function Updateprofile(Request $request){
    $request->validate([

     'name'=>'required|max:15',
     'email' =>'required|email|unique:users,email,'.auth()->user()->id,
     'profile_img' =>'nullable|mimes:jpg,png,jpeg,svg'
    ]);

if($request->hasFile('profile_img')){
    $ext=$request->profile_img->extension();
    $profileName=auth()->user()->name.'-' . Carbon::now()->format('d-m-y-h-m-s'). '.'.$ext;
    $request->profile_img->storeAS('users', $profileName,'public');
}
$user = User::find(auth()->user()->id);
$user->name = $request->name;
$user->email = $request->email;
$user->profile_img =$profileName??null;
$user->save();
return back();


}


function passwordUpdate(Request $request){
  $request->validate([
 
    'old' =>'required|current_password',
    'new' =>'required|max:8|different:old|confirmed',
  ]);
  $user = User::find(auth()->user()->id);
  $user->new=Hash::make($request->new);
  $user->save();
  return back();
}


}
