@extends('layouts.dashboardlayouts')
@section('backend')


    <div class="container mt-5 pt-4">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3>update</h3>
        </div>
        <div class="card-body ">
            <form action="{{route('Category.update',$editcategory->slug)}}" method="post">

    @csrf

    <input name="title"  value="{{$editcategory->title}}" type="text" class=" from-control my-2 " placeholder="Category">
    
    <button class="btn btn-primary" type="submit"> update Category</button>

  </form>

        </div>
    </div>
    </div>




@endsection