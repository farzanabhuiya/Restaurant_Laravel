@extends('layouts.dashboardlayouts')
@section('backend')


    <div class="container mt-5 pt-4">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3> Category</h3>
        </div>
        <div class="card-body ">
            <form action="{{route('Category.Add')}}" method="post">

    @csrf

    <input name="title"  value="" type="text" class=" from-control my-2 " placeholder="Category">
    
    <button class="btn btn-primary" type="submit"> Category</button>

  </form>

        </div>
    </div>
    </div>




@endsection