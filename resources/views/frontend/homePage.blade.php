

@extends('layouts.frontendlayouts')
@section('frontend')




<!------FreshFood------->
@foreach ($reataurantes as $reataurante )


<div class="food">
	
	<div class="d1">
		
		<h2>{{$reataurante->title}}</h2>
		{!!$reataurante->content!!} 

		 {{-- <button class="buttonn"> <a hreaf="">Orader New </a> </button> --}}
	</div>

	
</div>
 	
@endforeach 

  <!----------we create delicious----------->
@foreach ($specialdish as $specialdish)
	

<div class="box">
	<div class="d3">
		<img src="{{ asset('storage/specialdish/'.$specialdish->featured_img) }}">
	</div>

	<div class="d4">
		<div class="d5">
			<h2>{{$specialdish->title}}</h2> 
			{{-- <h2><span>we </span>create <span>delicious</span> memories for <span>you</span></h2>  --}}
			{!!$specialdish->content!!}
		</div>
	</div>
	
</div>

@endforeach

<!---------------whet will you--------->
	
@foreach ($posttitle as $posttitle)
	

	

<div class="box1" >
	<div class="d6">
		<div class="you" >
			<h2>{{$posttitle->title}}</h2>
			{!!$posttitle->content!!} </div> 

         
		   @foreach ($posts as $post)
			
		  
			
			<div>
            	<img src="{{ asset('storage/post/'.$post->featured_img) }}">
				<div class="r1"><h2>{{$post->produtc_name}}</h2></div>
            </div>
			@endforeach
			
             {{-- <div>
            	<img src="{{ asset('storage/'.$post->featured_img) }}">
				<div class="r1"><h2>Burger Dis</h2></div>
            </div> --}}
{{--               

             <div>
            	<img src="{{ asset('storage/'.$post->featured_img) }}">
				<div class="r1"><h2>Burger Dis</h2></div>
            	
            </div>

             <div>
               <img src="{{ asset('storage/'.$post->featured_img) }}">
			   <div class="r1"><h2>Burger Dis</h2></div>
               
            </div>


             <div>
             	<img src="{{ asset('storage/'.$post->featured_img) }}">
				 <div class="r1"><h2>Burger Dis</h2></div>
             	
            	
            </div>

             <div>
            	<img src="{{ asset('frontend/img/food10.jpeg')}}">
				<div class="r1"><h2>vegetable </h2></div>	
            </div> --}}


	</div>
	
</div>
@endforeach

<!-- ---- cooking5 --- -->


@foreach ($burgeritems as $burgeritem)
	
<div class="box100">
	<h1>{{$burgeritem->title}}</h1>
	{!!$burgeritem->content!!}
</div>

<div class="cooking5">
	
   

	@foreach($burger as $burger)
	<div class="bor111">
       <div class="rab">
			<img src="{{ asset('storage/burger/'.$burger->featured_img) }}">
		<h2>{{$burger->produtc_name}}</h2>
        <h3>$8.00 </h3>
		<button class="bot"> <a hreaf="">ADD TO CART </a> </button>
	</div>

	 </div>
	 @endforeach

	 
</div>

@endforeach



<!----------------Meat with vegetable salad---->
@foreach ($foodplats as $foodplat)
	

<div class="box2">
	 <div class="box3">
	 	 <div class="d7">
	
			<img src="{{ asset('storage/foodplat/'.$foodplat->featured_img) }}">
	 	 </div>
       <div class="d8">
       	<div class="d9">
	 	 <h2>{{$foodplat->title}}</h2></div>
		  {!!$foodplat->content!!}</div>
	 </div>
	
</div>
@endforeach


<!-------juico------->
@foreach ($juicoitems as $juicoitem)
	
<div class="juico">
	
      <div class="d10">
      	<h2>{{$juicoitem->title}}</h2>
		  {!!$juicoitem->content!!}
      </div>
	

	  
		
		
		<div class="d11">
			@foreach ($juicos as $juico)
			<div>
				<img src="{{ asset('storage/juico/'.$juico->featured_img) }}">
				<h2>{{$juico->produtc_name}}</h2>
				{{-- <h3>Nam lbgro tompare</h3> --}}
			{{-- <p>{!!$juico->conte!!}.</p> --}}
			   </div>
			   @endforeach

			    	
	


	  
			{{-- <div class="d11">

		<div>
			<img src="img/food22.jpeg">
			<h2>Lemon For juico</h2>
			<h3>Nam lbgro tompare</h3>
		<p>Lorem ipsum dolor,sit<br>consequat,Quide dita,<br>look of your document.</p>
		   </div>


		<div>
			<img src="img/food26.jpg">
			<h2>Apple For juico</h2>
			<h3>Nam lbgro tompare</h3>
		<p>Lorem ipsum dolor,sit<br>consequat,Quide dita,<br>look of your document.</p>
		  </div>

		<div>
			<img src="img/food20.webp">
			<h2>Pincopple For juico</h2>
			<h3>Nam lbgro tompare</h3>
		<p>Lorem ipsum dolor,sit<br>consequat,Quide dita,<br>look of your document.</p>
		 </div>
		</div>    --}}







  </div>  
  
   

</div>
 	
@endforeach  

  <!------ Fresh Vegetables---------->

   <div class="vegetable">
   	<div class="ddd">
   		<h1>Fresh <span>  Vegetables</span></h1>
   	</div>
   	<div class="d12">
   		 <h2>Best Vegetables</h2>
   		 <p>Lorem Ipsum is simply dummy text of the printing.<br>Lorem Ipsum has been the industry's  a galley of type<br>To make and a type specimen book to the printing. <br>It y five centuries, remaining essentially unchanged.<br>To make a type anf specimen book to the printing.</p>
   	     </div>


   	<div class="d13">
   		<img src="{{ asset('frontend/img/food25.jpg')}}">
   	   </div>

   	<div class="d14">
   		<img src="{{ asset('frontend/img/food28.jpeg')}}">
   	</div>
   	
   </div>


   @endsection
