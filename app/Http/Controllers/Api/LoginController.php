<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\BaseController;




class LoginController extends BaseController
{
    // public function register(Request $request){
    //     $validator = Validator::make($request->all(),[
    //         'name' =>'required',
    //         'email' =>'required|email|max:266|unique:users',
    //         'password'=>'required|max:6',
    //         'confirm_password' =>'required|same:password',
    //     ]);

    //     if($validator->false())
    // {
    //     return $this->senderror('Validator Error',$validator->errors());
    // }
    // $password = bcrypt($request->password);

    //    $user =User::create([
    //     'name' =>$request->name,
    //     'email' =>$request->email,
    //     'password' =>$password,

    //    ]);
       
    //    $success['tokon'] =$user->createToken('restaurant')->plainTextToken;
    //    $success['name'] = $user->name;

    //    return $this->sendResponse($success,'user regis successfull');
    // }



    public function login(Request $request){
        $request->validate([
            'email'    =>'email|required',
            'password' =>'required'
        ]);
       if(Auth::attempt(['email' =>  $request->email, 'password' =>  $request->password])){
         
           $user =User::where('email',$request->email)->first();
           $tokon =$user->createToken('apiTokon' . $user->name)->plainTextToken;

            return $this->sendResponse('you are login',[
                 'user'  =>$user,
                 'tokon' =>$tokon,
            ],200);
       }else{
        return $this->senderror('un-authenticated',[],401);
       }
    }


     

                      //////// register


    public function register(Request $request){
          $request->validate([

            'name' =>'required',
            'email' =>'required|email|max:255',
            'password'=>'required|max:6',
            'confirm_password' =>'required|same:password',

          ]);

          $user =User::create([
            'name' =>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
          ]);
          $tokon =$user->createToken('apiTokon' . $user->name)->plainTextToken;


          return $this->sendResponse('You are Register successfull',[
            'user'  =>$user,
            'tokon' =>$tokon,
       ],200);

    }


  //  public function logOut(){
  //   auth()->user()->tokon()->delete();
  //   return $this->sendResponse([],'user logged out');

  //  }


}
