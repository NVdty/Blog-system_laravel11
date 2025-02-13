<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', function () {
    return view('home', ['title'=>'Homepage']);
});

Route::get('/posts', function(){

    return view ('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search','category', 'author']))->latest()->paginate(9)]);

});

Route::get('/posts/{post:slug}', function (Post $post){

    return view ('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/posts/{post:slug}', function (Post $post){

    return view ('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/author/{user:username}', function (User $user){

    return view ('posts', ['title' => count($user->posts). ' Articles By '. $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category){

    return view ('posts', ['title' => ' Articles in: '. $category->name, 'posts' => $category->posts]);
});

//about
Route::get('/about',function (){
    return view('about', ['title'=>'About']);
});

//function
Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact']);
});


