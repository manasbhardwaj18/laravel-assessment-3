<?php

use Illuminate\Support\Facades\Route;

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

Route::get( '/hello/{n1?}/{n2?}', function (?int $n1, ?int $n2 ) {                 // route parameter
    return view('hello ', ['result'=>$n1+$n2]); 
})->where('n1','[0-9]+')
    ->where('n2','[0-9]+');


Route::get( '/name', function (){
    return view('name', ['name' => 'Michael']);
});


Route::get( '/date', function (){
    $todayDate = date("D, dS M Y");
    $time = date('G');
    return view('date', ['date' => $todayDate, 'time' => $time]);
});

Route::get('/loop',function(){
    $tasks = [
        'My first order',
        'Second course',
    ];
    return view('loop', ['tasks' => $tasks]);
    
});

Route::get('/dashboard',function(\Illuminate\Http\Request $request){
    return ['name' => 'Nikunj'];
    // dd($request->fullUrl());

    $req = ($request->input('name'));
    
    return view('home',['name'=> $req]);
    
})->name('Dashboard');

Route::get('/about',function(){
    
    return view('about');
    
});