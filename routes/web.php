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

Route::get('/', function () {

    $data = [
        'items' => config('header_data'),
        'options' => config('data_options'),
        'socials' => config('data_social'),
        'links1' => config('footer_link1'),
        'links2' => config('footer_link2'),
        'links3' => config('footer_link3'),
        'links4' => config('footer_link4'),

    ];

    return view('home.index',$data);
})->name('home');


Route::get('/comics', function () {
    $data = [
        'items' => config('header_data'),
        'options' => config('data_options'),
        'socials' => config('data_social'),
        'links1' => config('footer_link1'),
        'links2' => config('footer_link2'),
        'links3' => config('footer_link3'),
        'links4' => config('footer_link4'),
        'cards' => config('store_comics')

    ];

    return view('comics.index',$data);
})->name('comics');


Route::get('/comics/{id}', function($id)  {

    $data = [
        'cards' => config('store_comics')

    ];

    return view('comics.show',$data);
})->name('comics');



