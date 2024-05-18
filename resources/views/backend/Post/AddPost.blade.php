@extends('layouts.dashboardlayouts')
@section('backend')


<div class="container">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3> Post Add</h3></div>
            <div class="card-body ">
                <form action="{{route('Post.title')}}" >
                    @csrf
                   
                 
                    <div class="my-3">  
                        <input name="title" type="text" class="form-control my-2" placeholder="post title">
                           </div>
                          
                           
                           <div class="my-3">
                            <textarea name="content"  id="editor" placeholder="Content Goes Here...."></textarea>
                           </div>
                           <button class="btn btn-primary">Submit</button>
                </form>
    
</div>
</div>







<div class="container  mt-3 pt-4">
    
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3> Post Add</h3></div>
            <div class="card-body ">
                <form action="{{route('Post.Store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                       
                           <div class="my-3"> 
                            <input name="produtc_name" type="text" class="form-control my-2" placeholder="Product Name">
                               </div>

                       <div>  
                        <input name="featureimg" type="file" class="form-control my-3">
                           </div>
                                         
                           <div class="row">

                            <div class="col-lg-6">
                                <select name="category"  class="form-control my-2 categorySelect">
                                    <option disabled selected>Select Category</option>
                                    @foreach ($categories as $category )
                                              <option value="{{$category->id}}">{{$category->title}}</option>
                         
                            @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                            <select name="posttitle_id"  class="form-control my-2 ">
                                <option disabled selected>Select Category</option>

                             @foreach ( $posttitles as $posttitle )
                            <option value="{{$posttitle->id}}"> {{$posttitle->title}}</option>
                                       
                            @endforeach
                        </select>
                            </div>
                               <button class="btn btn-primary">Submit</button>
    
                </form>
            </div>
    </div>
</div>


@push('customJs')

<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endpush
    
@endsection