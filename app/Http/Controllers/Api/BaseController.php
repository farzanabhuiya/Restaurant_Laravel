<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result, $message){

            $response =[
                  
               'success' =>true,
               'data'    =>$result,
               'message' =>$message,

            ];
            return response()->json($response,200);
    }


    /**
     * return error message
     *  @param string $error
     */
      
    //  public function senderror($error, $errorMessage =[],$code = 404)

     public function senderror($error,$code = 401){
             
              $response = [
                'success' =>false,
                'message' =>$error,

              ];

            //   if(!empty($errorMessage))
            //   {
            //     $response['data']=$errorMessage;
            //   }
              return response()->json($response, $code);
     }
}
