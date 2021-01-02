@extends('public.mainpublic')

@section('title')
gallery Events
@endsection

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


@endsection
@section('main')
<!-- Stack the columns on mobile by making one full-width and the other half-width -->





  <div class="col-lg-12">
  
						<div class="blog-sec right-pading">
           
							<div class="row">
              @foreach($showall as $value)
								<div class="col-lg-6 col-sm-6">
									<div class="g-post-classic">
										<figure>
											<img alt="" src='{{asset("images/$value->event_image")}}'>
											<i class="fa fa-video-camera"></i>
										</figure>
										<div class="g-post-meta">
											<div class="post-title">
												<h4>{{$value->	event_name}}</h4>
												<p>{{$value->event_desc}} </p>
												<span class="p-date">{{$value->event_date}} </span>
											</div>	
											<a href ="single/{{$value->id}}"> <button type="submit"  class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View  </button></a>
										</div>
									</div>
								</div>
								
                @endforeach
								
								
								
							</div>
						</div>
					</div>

 
  
  


@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
@endsection