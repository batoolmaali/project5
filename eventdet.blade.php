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
<div class="card-deck">
 
  <div class="card">
    <img class="card-img-top" src='{{asset("images/$show->event_image")}}'alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$show->event_name}}</h5>
      <p class="card-text">{{$show->event_desc}}</p>
      <p class="card-text"><small class="text-muted">ooo</small></p>
    </div>
  </div>
</div>


  
  

                

                
           
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
@endsection