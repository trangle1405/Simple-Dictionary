<?php

use Illuminate\Http\Request;
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


Route::get('/', function () {
    return view('form_translate');
});


Route::post('/form_translate', function (Request $request) {

    $dictionary = array(
        "dog" => "chó",
        "cat" => "mèo",
        "mouse" => "chuột",
        "rabbit" => "thỏ",
        "hello" => "xin chào"
    );
    foreach ($dictionary as $key=>$val ){
        if ($request->englishWord == $key){
            return view('show_translate', compact(['val']));
        } else
            return view('error_translate');
    }

});