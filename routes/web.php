<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () { return 'главная страница сайта';
});
Route::get('/posts/', function () { return 'список постов'; });

    Route::get('/post/1/', function () { return 'один пост'; });

Route::get('/test', function () { return '!'; });

Route::get('/dir/test/', function () { return '!!'; });

//ОБЯЗАТЕЛЬНЫЕ ПАРАМЕТРЫ

Route::get('user/show-{id}/', function ($id) { return 'show '.$id;
});

Route::get('user/{id}', function ($id) { return 'id '.$id;
  })-> where('id', '[0-9]+');

Route::get('user/{name}', function ($name) { return 'User '.$name;
  })-> where('name', '[A-Za-z]+');

Route::get('sum/{num1}/{num2}/', function ($num1,$num2) { return 'User '.$num1 + $num2;
  })-> where('name', '[A-Za-z]+') ;


/*/

  //НЕОБЯЗАТЕЛЬНЫЕ ПАРАМЕТРЫ

Route::get('user/{id?}', function ($id=null) { return $id;
});
Route::get('user/{id?}', function ($id=0) { return $id;
});

//3 КОНТРОЛЛЕРЫ

//Задача 1

Route::get('test/show', [App\Http\Controllers\tControler::class, 'show']);

//Задача 2

Route::get('pages/show/{id}', [App\Http\Controllers\Page::class, 'showOne'])
-> where('id', '[0-9]+');

//Задача 3

Route::get('pages/all/{id}', [App\Http\Controllers\Page2::class, 'showAll'])
-> where('id', '[0-9]+');

//С параметрами

Route::get('test/show/{param}', [App\Http\Controllers\TestController::class, 'show']);

//Задача 3.7

Route::get('pages/M/{id}', [App\Http\Controllers\Page2::class, 'showM']);


//Несколько параметров

Route::get('test/show/{param1}/{param2}', [App\Http\Controllers\Param::class, 'show']);

Route::get('test/sum/{num1}/{num2}', [App\Http\Controllers\Test::class, 'show']);

Route::get('test/show/{id}', [App\Http\Controllers\Employee::class, 'show'])
-> where('id', '[0-9]+');

Route::get('test/show/{id}/{name}', [App\Http\Controllers\Employee::class, 'shows'])
-> where('id', '[0-9]+');

Route::get('test', [App\Http\Controllers\Vieww::class, 'show']);

Route::get('test', [App\Http\Controllers\zad42::class, 'show']);

Route::get('test', [App\Http\Controllers\perem::class, 'show']);

Route::get('test', [App\Http\Controllers\zad51::class, 'show']);

Route::get('test', [App\Http\Controllers\atrib::class, 'show']);

Route::get('test', [App\Http\Controllers\zad53::class, 'show']);

Route::get('test', [App\Http\Controllers\zad54::class, 'show']);

Route::get('test', [App\Http\Controllers\zad55::class, 'show']);

Route::get('test', [App\Http\Controllers\zad56::class, 'show']);

Route::get('test', [App\Http\Controllers\rabSmas::class, 'show']);

Route::get('test', [App\Http\Controllers\zad57::class, 'show']);

Route::get('test', [App\Http\Controllers\zad58::class, 'show']);

Route::get('test', [App\Http\Controllers\zad59::class, 'show']);

Route::get('test', [App\Http\Controllers\zad510::class, 'show']);

Route::get('test', [App\Http\Controllers\zad511::class, 'show']);

Route::get('test', [App\Http\Controllers\zad512::class, 'show']);

Route::get('test', [App\Http\Controllers\zad513::class, 'show']);

Route::get('test', [App\Http\Controllers\zad514::class, 'show']);

Route::get('test', [App\Http\Controllers\zad61::class, 'show']);

Route::get('test', [App\Http\Controllers\zad62::class, 'show']);

Route::get('test', [App\Http\Controllers\zad63::class, 'show']);

Route::get('test', [App\Http\Controllers\zad64::class, 'show']);

Route::get('test', [App\Http\Controllers\zad65::class, 'show']);

Route::get('test', [App\Http\Controllers\zad66::class, 'show']);

Route::get('test', [App\Http\Controllers\zad71::class, 'show']);

Route::get('test', [App\Http\Controllers\zad72::class, 'show']);

Route::get('test', [App\Http\Controllers\zad73::class, 'show']);

Route::get('test', [App\Http\Controllers\zad74::class, 'show']);

Route::get('test', [App\Http\Controllers\zad75::class, 'show']);

Route::get('test', [App\Http\Controllers\zad76::class, 'show']);

/*/

Route::get('test', [App\Http\Controllers\HomeS::class, 'show']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'site']);