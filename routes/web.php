<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/singlepost', function () {
    return view('singlepost');
});

Route::get('/blogs', function () {
    return view('blogs', [
        'heading' => 'Latest Blogs',
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{id}', function ($id) {
    return view('blog', [
        'blog' => Blog::find($id)
    ]);
});
