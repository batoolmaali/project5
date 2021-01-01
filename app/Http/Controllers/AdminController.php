<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Post;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function validateRequest($request)
    {
        $request->validate([
            'name'     => 'required|min:5',
            'password'  => 'required|min:8|max:16',
            'email'     => 'required|email',
          
           
        ]);
    }

    public function store(Request $request)
    {
      $this->validateRequest($request);
      if ($request->hasFile('admin_image')) {
        $file = $request->file('admin_image') ;
        $ext = $file->getClientOriginalExtension() ;
        $filename = time() . '.' . $ext ;
        $file->move('images', $filename);
    } else{
        $filename = 'image.png';
    }
       
                Admin::create([
                 $password= strval($request->password),
                "admin_name"    => $request->name,
                "admin_password"    =>$request->password,
                "admin_email"       =>$request->email,
                "role"       => $request->role,
                "admin_image" => $filename,
               
            ]);
         
                //  return "done";
                return redirect("/admin");
      
    }
    public function show(){
      
            $admin = Admin::orderByDesc('id')->get();
            //   $user=Admin::all();
            // dd($admin);

              return view("admins.admins", [
                "x" =>  $admin
            ]);
        }
        public function distroy($id){
            $x = Admin::where("id", $id)->delete();
            return redirect("/admin"); 
        }
        public function edit($id)
        {
            $user =Admin::where("id", $id)->get()->first();
    
            return view("admins.edit_admin", [
                "user" => $user
            ]);
        }
    
        public function update(Request $request, $id)
        {
            $this->validateRequest($request);
          
          
            Admin::where("id", $id)->update([
                "admin_name"        => $request->name,
                "admin_password"    =>$request->password,
                "admin_email"       =>$request->email,
                "role"             => $request->role,
               
                  
            ]);
    
            return redirect("/admin");
        }
}
