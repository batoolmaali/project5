@extends('layout.users_layouts.NewfeedsLayout')
@section('content')
​
<section class="games-single-page  mt-3">
​
		<div class="container">
		@foreach($showall as $value)
        <div class="row mb-4">
			
				<img src=  '{{asset("images/$value->event_image")}}' height="400em" width="400em" alt="">
                <div class="col-xl-1 col-lg-1 col-md-1"></div>
				<div class="col-xl-10 col-lg-10 col-md-10 game-single-content">
					
                    <div><h2 style="color:white">{{$value->event_name}}</h2></div>
                    <div><h4>{{$value->event_date}}</h4></div>
					<div><h2 class="gs-meta">{{$value->event_desc}}</h2></div>

				</div>
				<div class="col-xl-1 col-lg-1 col-md-1">
					
				</div>
			</div>
			@endforeach
		</div>
​
	</section>
	<!-- Games end-->
​
	
    @endsection
