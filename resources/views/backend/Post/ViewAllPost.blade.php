

@extends('layouts.dashboardlayouts')
@section('backend')


<div class="container mt-5 pt-4">
    <div class="card bg-success-subtle">
        <div class="card-header  ">
            <h3>All Post</h3>
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
@foreach ( $posts as $key=>$post )
    <tr>

        
         <td>{{ ++$key}}</td>
        
        <td>{{$post->produtc_name}}</td>
        <td>
            <img height="70px" src= "{{ asset('storage/post/'.$post->featured_img) }}"></td>

            <td><span class="badge bg-{{$post->is_popular == 0 ? 'danger':'success'}}">{{$post->is_popular == 0?'De-active':'Active'}}</span></td>
        <td>
            <a href="{{route('Post.Edit',$post->slug)}}" class="btn btn-primary ">Edit</a>
           


           
            <a href="#"  id="deleteBtn" class="btn btn-danger btn-sm deleteBtn ">Delete</a>
                        <form action="{{ route('Post.Delete',$post->id) }}" method="post">
                        @csrf
                    @method('DELETE')
                        </form>
           
           
           
           
{{--            
            <a href="" class="btn btn-danger btns-sm deletebtn">Deleted</a>
            <form action="{{ route('Post.Delete',$post->id) }}" method="post">
                @csrf
                @method('DELETE')

            </form> --}}
        </td>
    </tr>
    
    @endforeach
 
 </Table>

        </div>
    </div>
</div>







@push('customJs')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

$('.deleteBtn').click(function (event){
  event.preventDefault()
    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
   $(this).next('form').submit()
  }
});

});

    </script>
@endpush
@endsection