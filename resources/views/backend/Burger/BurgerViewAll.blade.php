

@extends('layouts.dashboardlayouts')
@section('backend')


<div class="container mt-5 pt-4">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3>Burger All</h3>
        </div>
        <div class="card-body ">
 <Table class="table">
    <tr>
        <th>#</th>
        {{-- <th>Title</th> --}}
        <th>Product</th>
        <th>Featured_img</th>
        <th>Populer</th>
        <th>Action</th>
    </tr>


    
@foreach ($burgers as  $key=>$burger)
    


    <tr>
        <td> <td>{{ ++$key}}</td></td>
        <td>{{$burger->produtc_name}}</td>
         <td>
            <img height="70px" src= "{{ asset('storage/burger/'.$burger->featured_img) }}"></td>

            <td><span class="badge bg-{{$burger->is_popular == 0 ? 'danger':'success'}}">{{$burger->is_popular == 0?'De-active':'Active'}}</span></td>
        <td>
            <a href="#" class="btn btn-primary btns-sm">Edit</a>
        </td>
    </tr>
    
    @endforeach
 
 </Table>

        </div>
    </div>
</div>

@endsection