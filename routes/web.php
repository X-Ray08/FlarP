<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\hcontroller;
use App\Http\Controllers\Math;
use App\Http\Controllers\SignUp;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/about', function () {
    $person =[
     "name" =>"Rayan",
     "email"=> "ray.pybot@gmail.com",
    ];
    //dump($person);
    //dd($person);
    return view('ray');
});
Route::view('/', 'welcome')->name('welcome');

route::get('/product/{id?}', function (string $id= null) {
    return ("Prudoct ID=$id");
})->whereNumber("id");

route::get('/uname/{uname?}', function (string $uname= null) {

    $aboutPageUrl = route('welcome');
    dd($aboutPageUrl);

    return ("Uname =$uname");
})//->where('uname', '[a-z]{5}')
;
route::prefix('admin')->group(function () {
    Route::get('/user', function (){
        return('/admin/user');
    });
});
route::fallback(function () {
    return("Error");
});
route::get('/a/{n1}/{n2}',function(float $n1,float $n2){
    return $n1 + $n2;
});
//route::get('/sum/{a}/{b}', [Math::class, 'sum'])->whereNumber(['a', 'b']);
//route::get('/sub/{a}/{b}', [Math::class, 'sub'])->whereNumber(['b',  'a']);
route::get('/home',[homecontroller::class,'welcome']);
route::get('/index',[hcontroller::class,'index']);

route::view('/indexx','index')->name('index');

route::view('/button','Shared.Buttons')->name('Buttons');
route::get('/signup',[SignUp::class,'create']);
route::get('/login',[login::class,'create']);