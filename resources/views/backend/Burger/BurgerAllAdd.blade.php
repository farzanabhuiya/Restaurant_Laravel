

@extends('layouts.dashboardlayouts')
@section('backend')



<div class="container mt-5 pt-4">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3> Burgeritems Title</h3>
        </div>
        <div class="card-body ">
 <Table class="table">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Content</th>
        <th>Populer</th>
    </tr>


    
 @foreach ($burges as $key=>$burge)


    <tr>
        {{-- <td>{{$posttitles->firstITEM()  +$key}}</td> --}}
        <td>{{$burge->title}}</td>
        <td>{!!$burge->content!!}</td> 
      
       
    </tr>
    
    @endforeach 
 
 </Table>

        </div>
    </div>
</div> 

@endsection 