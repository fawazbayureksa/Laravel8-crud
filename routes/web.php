<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

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



// Resouece memudah kan untuk membuat CRUD ketika menggunakan route
// route tersebut sudah complete, mulai dari index, create, store, edit, pdate dan destroy
// Route::resource('blog',BlogController::class);
Route::get('/','PostController@index');
Route::get('/article/{post:slug}','PostController@show');
Route::get('/blog', 'PostController@tampil');

//Contoh Route Model Binding
Route::get('categories/{category:slug}',function(Category $category) {

	return view('frontend/sub/category', [
		'title' => $category->name,
		'posts' => $category->posts,
		'category' => $category->name

	]);
});
