@extends('layout.users_layouts.postsLayout')
​
@section('title')
    Categories
@endsection
​
@section('content')
​
    <!-- Page top section -->
   
                            
                                        
                        
  
    <section class="games-section">
​
<!-- <div>
    <h4 style="color:#cc00cc;" class=" ml-20px;"> Gemes Category</h4>
</div> -->
​
        <div class="container  ">
            
        <!-- <div class="row">
            <div class="col-3"></div>
            <div class="col-6"> <h4 style="color:#cc00cc;" > Gemes Category</h4></div>
            <div class="col-3"></div>
              </div> -->
        
    <div class="row">
​
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-1 col-md-12"></div>
						<div class="col-lg-4 col-md-12">
							<div class="game-item">
                            <a href="posts/{{$category->id}}"><img height="400em" width="400em" src='{{asset("images/cat_images/$category->cat_image")}}'></a>
                           <h5>{{$category->cat_name}}</h5>

                                <h5>{{$category->cat_desc}}</h5>
                                
								
							</div>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                        @endforeach
</div>
</div>
</div>
</div>
</section>
    <!-- Blog page end-->
​
​
​
​
@endsection