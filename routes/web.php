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
/*
Route::get('/', function () {
    return view('welcome');
});

//Route::get('index','Front\UserController@getArrayIndex');
Route::get('index','Front\UserController@getObjIndex');

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});

//route parameters && route name
//1.required parameter

Route::get('/show-number/{id}', function ($id) {
    return $id;
}) -> name('a'); //fyhtml file b3ml {{route('a')}}
//2. optional parameter

Route::get('/show-string/{id?}', function () {
    return 'welcome';
}) -> name('b'); //fyhtml file b3ml {{route('b')}}
*/
/*
//naming routing and namespaces
Route::namespace('Front')->group(function(){
    //group y3ny ana m3ya group of routes
    //eno kol el routes deh 7troo7 3la el controller
    //el gowa el front or methods el fy front
    Route::get('users','UserController@showUserName');
});
*/
//prefix
/*
Route::prefix('users')->group(function(){
    Route::get('show','UserController@showUserName');
    Route::delete('delete','UserController@showUserName');
    Route::get('edit','UserController@showUserName');
    Route::put('update','UserController@showUserName');
});*/
/*
//or w dah a7sn shkl aktb beh
Route::group(['prefix' => 'users','middleware'=>'auth'],function(){
    Route::get('/',function(){
        return 'work';
    });
    Route::get('show','UserController@showUserName');
    Route::delete('delete','UserController@showUserName');
    Route::get('edit','UserController@showUserName');
    Route::put('update','UserController@showUserName');
});

//middleware a2dr azor url dah wla l2

Route::get('forPerson',function(){
    return 'with auth';
}) -> middleware('auth');

*/
/*
Route::get('login',function(){
    return 'must be login to access this page';
}) -> name('login');
//controller && namespace (middleware in controller)
Route::group(['namespace'=>'Admin'],function(){
    Route::get('second','SecondController@showString');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
    Route::get('second3','SecondController@showString3');

});

//controller resourses
Route::resource('news','NewsController');
*/


Auth::routes(['verify'=>true]);//deh el feha kol 7aga login register reset pass

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

Route::get('/',function(){
    return 'Home';
});

Route::get('/dashboard',function(){
    return 'dashboard';
});
