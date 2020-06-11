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

Route::view('/', 'welcome')->name('index');;
Route::post('/contact','ContactController@sendMessage')->name('contact.send');
Auth::routes();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::view('home', view('admin.home'))->name('home');
    Route::resources(['employes'=>'Admin\EmployeController',
                'clients'=>'Admin\ClientController',
                'contrats'=> 'Admin\ContratController',
                'contacts'=> 'Admin\ContactController']);
    Route::get('/serach','ClientController@search');
});

Route::middleware(['client'])->name('client.')->prefix('client')->group(function () {
    Route::get('home', function () {
        return view ('client.home');
    })->name('home');
    Route::resources(['contrats'=> 'Client\ContratController']);
});

Route::middleware(['employe'])->name('employe.')->prefix('employe')->group(function () {
    Route::get('home', function () {
        return view('employe.home');   
        // Matches The "/admin/users" URL
    })->name('home');
    Route::resources(['clients'=>'Employe\ClientController',
                    'contrats'=> 'Employe\ContratController']);
});

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('home', 'DashboardController@index')->name('admin.home');
    Route::get('/serach','ClientController@search');
    Route::get('client','ClientController@index')->name('client.index');
    Route::get('client/{id}','ClientController@show')->name('client.show');
    Route::resource('contrat','ContratController');
    //Route::resource('employe','EmployeController');
});

Route::group(['prefix'=>'employe','middleware'=>'auth','namespace'=>'Employe'], function (){
    Route::get('home', 'DashboardController@index')->name('employe.home');   
});

//Route::get('/deconnexion', 'AdminController@deconnexion');
//Route::get('/logout', 'EmployeController@logout');
Route::get('/home', 'HomeController@index');
//Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
//Route::get('/employe', 'EmployeController@index')->name('employe')->middleware('employe');
//Route::get('/client', 'ClientController@index')->name('client')->middleware('client');