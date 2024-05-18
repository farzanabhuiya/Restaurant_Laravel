

@extends('layouts.dashboardlayouts')
@section('backend')


<div class="container mt-5 pt-4">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3>category</h3>
        </div>
        <div class="card-body ">
 <Table class="table">
    <tr>
        <th>#</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    
@foreach ( $categories as $key=>$category )


    <tr>
        <td>{{$categories->firstITEM()  +$key}}</td>
        <td>{{$category->title}}</td>
        <td>
            <a href="{{route('Category.edit',$category->slug)}}" class="btn btn-primary btns-sm">Edit</a>
        </td>
    </tr>
    
    @endforeach
 
 </Table>
 {{$categories->links()}}
        </div>
    </div>
</div>

@endsection