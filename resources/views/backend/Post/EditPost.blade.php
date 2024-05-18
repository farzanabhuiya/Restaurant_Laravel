
@extends('layouts.dashboardlayouts')
@section('backend')

<div class="container  mt-3 pt-4">
    
    <div class="card">
        <div class="card-header  ">
            <h3> Edit Post</h3></div>
            <div class="card-body ">
                <form action="{{route('Post.All.Update',$editposts->slug)}}" method="Post" enctype="multipart/form-data">
                  
                    @csrf
                    @method('put')
               
               
                  
                            <div class="my-3">  
                            <input name="produtc_name"  value="{{$editposts->produtc_name}}" type="text" class="form-control my-2" placeholder="Product Name">
                               </div>

                       <div>  
                        <input name="featureimg" value="{{$editposts->featureimg}}"  type="file" class="form-control my-3">
                           </div>

                               <button class="btn btn-primary">Update Post</button>
    
                </form>
            </div>
    </div>
</div> 


    
@endsection 

