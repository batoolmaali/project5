@extends('layout.admins_layouts.admin_main')
@section('main')



<div class="card" style="width:90%">
 <div class="card-header">
       <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                    <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>

                                                        </div>
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Add admin</h4>
                                                            <form action="/admin/update/{{$user->id}}" method="post" enctype="multipart/form-data">
                                                                 @csrf
                                                                 @method('put')
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Admin name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" placeholder="Enter admin name" name="name" value="{{$user->admin_name}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Admin Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control" placeholder="Password input" name="password" value="{{$user->admin_password}}">
                                                                    </div>
                                                                </div>
                                                              
                                                               
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Admin email
                                                                        </label>
                                                                        <div class="col-sm-10">
                                                                            <input type="email" class="form-control"placeholder="Enter Admin email" name="email"  value="{{$user->admin_email}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">role</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="role" class="form-control">
                                                                                <option value="opt1">Select Admin role</option>
                                                                                <option value="opt2">Admin</option>
                                                                               
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                                       
                                                                            
                                                                            </div>
                                                                           
                                                                            <button type="submit" class="btn btn-primary">Submit</button>

                                                                            </div>
                                                                        </form>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                               
                                                                              
                                                                            </div>
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                               
                                                                             
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                            </div>
                                        </div>
                                                                @endsection
</body>
</html>