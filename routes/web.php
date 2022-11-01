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
    return view('home',["title" =>"Pilihan 1 "]);
});

Route::get('/data', function () {

$artikel =[
    [
        "katagori" => "1",
        "title" => "gatau 1",
        "pembuat" => "rifky",
        "isi" => "gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng gw ganteng"
    ],

    [
        "katagori" => "2",
        "title" => "gatau 2",
        "pembuat" => "raisa",
        "isi" => "gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik gw cantik"

    ]
    ];

    return view('data',["title" =>"Pilihan 2 ", "artikel"=> $artikel]);
});
