<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrondEndController@homePage')->name('home');
Route::get('about-us','FrondEndController@aboutUs')->name('about');
Route::get('contact-us','FrondEndController@contactUs')->name('contact');

Route::group(['prefix'=>'user'],function(){
    
});

Route::get('/create', function(){
    return view('create');
});

Route::post('/create',function(){
    // $article = new Article();
    // $article->name = request('name');
    // $article->content = request('content');
    // $article->body = request('body');
    // $article->save();

    Article::create([
        'name' => request('name'),
        'content' => request('content'),
        'body' => request('body')
    ]);
    return redirect('about-us');
});


