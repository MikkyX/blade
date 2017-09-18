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
    return view('hello');
});

Route::get('/components', function () {
    return view('components');
});

Route::get('/includes', function () {
    return view('includes',[
        'logged_in' => false,
        'people' => ['John','Paul','George','Ringo'],
    ]);
});

Route::get('/data', function () {
    return view('data',[
        'title' => 'This is the data blade',
        'content' => '<p>This content contains actual HTML. <strong>Use with caution.</strong>',
    ]);
});

Route::get('/control', function () {
    return view('control',[
        'number' => 1,
        'people' => ['Matt','Chris','Dominic'],
        'records' => [],
        'show_me' => true,
        'thing' => false,
    ]);
});

Route::get('/inject', function () {
    return view('inject');
});

Route::get('/directive', function () {
    return view('directive');
});

Route::get('/if', function () {
    return view('if');
});
