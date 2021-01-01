<?php
use App\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test/{id}','UserController@single');


Route::get('/checking', function () {
    return view('users.newfeeds');
});


Route::get('/testingRelations/{id}', function ($id) {
    $user=\App\Category::find($id)->user;
    return $user;
});


//posts routes

Route::get('/posts', 'PostController@index');
Route::get('newfeeds', 'PostController@index');
Route::post('/posts/create', 'PostController@create');
Route::get('deletePost/{id}', 'PostController@destroy');

//posts routes end


// Category routes -Admin Dashboard
Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::get('/delete/{id}', 'CategoryController@destroy');
Route::get('/edit/{id}', 'CategoryController@edit');
Route::post('update/{id}', 'CategoryController@update');





// event route
Route::get('/event', function () {
    return view('layout.event');
});
Route::get('/admin_main', function () {
    return view('layout.admin_main');
});
Route::get('/edit', function () {
    return view('layout.edit');
});
Route::post("/Event","EventController@store");
Route::get("/edit/{id}","EventController@edit");
Route::post("/update/{id}","EventController@update");
Route::get("/event","EventController@index");
Route::delete("/delete/{id}","EventController@destroy");
//end event routes





//admins routes

Route::post("/admin/store", "AdminController@store");
Route::get("/admin", "AdminController@show");

Route::delete("/admin/delete/{id}","AdminController@distroy");
Route::get("/admin/edit/{id}", "AdminController@edit");
Route::put("/admin/update/{id}", "AdminController@update");


//admin routes end

// Route::get("test/{id}", function ($id){
//     $post = Category::find($id)->posts;
//     return $post;
// });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
