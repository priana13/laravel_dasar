<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post.index');
Route::post('/post', 'HomeController@store')->name('form');
Route::get('/post/create', 'PostController@create');

Route::get('/post/{post}', 'PostController@show');

Route::get('/user/{id}', 'PostController@index');

Route::get('/post/{post}/delete', 'PostController@destroy');



Route::get('/user/{nama}', 'HomeController@user');

Route::get('/lain', function () {
    return "oke berhasil ke halaman lain";
})->name('lain');

Route::get('/email', 'HomeController@email')->name('email');

Route::resource('wa', 'BroadcastController');

Route::get('/seed', function(\App\Post $post){

 
    $faker = Faker\Factory::create();
    
    

    foreach (range(1,100) as $x) {
       
       $post->create([
           'title' => $faker->sentence(5),
           'content' => $faker->sentence(100),
           'slug'=>uniqid(),
           'is_published' => 0
       ]);
    }
});

