<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('form');
});

Route::get('/form', function(){
    return view('form');
});

Route::post('/submit', function(Request $request){
    \Log::debug($request['name']);
    return view('submit', ['request' => $request]);
});
