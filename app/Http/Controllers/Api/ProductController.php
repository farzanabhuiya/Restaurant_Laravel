<?php

namespace App\Http\Controllers\Api;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends BaseController
{
    public function index(){

        
       $products =product::all();

       return $this->sendResponse(ProductResource::collection($products), 'products retrieved');

    }

    public function store(Request $request){


        $request->validate([

            'name' =>'required',
            'content' =>'required',
         ]);
     
         $product = product::create($request->all());
         return $this->sendResponse(new ProductResource($product), 'product created successfully');
    }
 
  public function show($id){
    $product = product::find($id);
    if(is_null($product))
    {
           return $this->senderror('product not found');
    }

      return $this->sendResponse(new ProductResource($product),'product retrieved');
  }



     public function update(Request $request, Product $product){

        $request->validate([

            'name' =>'required',
            'content' =>'required',
         ]);

         $product = product::create($request->all());
         return $this->sendResponse(new ProductResource($product), 'product updated');
     }
     

     public function destroy(Product $product){
             
             $product->delete();
             return $this->sendResponse(new ProductResource($product), 'product deleted');
     }
}
