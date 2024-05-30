<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', function () {
    return 'Bonjour';
});

Route::get('/blog', function () {
    return [
        // "name" => $_GET['name']
        "article" => "Article 1"
    ];
});

Route::get('/user', function (Request $request) {
    return [
        "name" => $request->path(),
        "article" => "Article 1"
    ]; 
});

// Route::get('/word', function() {
//     return
//     "<body>
//     <p>
//     <a href="http://www.google.com">Hello Word</a>
//     </p>
//     </body>";
// });
