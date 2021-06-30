<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contentcontroller;
use App\Http\Controllers\photocontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\Adminlogoutcontroller;

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

// .....................


Route::get('/login', 'LoginController@login');
Route::post('/register', 'registercontroller@store55');
Route::get('/register', 'registercontroller@register');
Route::post('/login', 'loginController@verify');


Route::group(['middleware'=>['sess']], function(){
  
    Route::get('/logout', 'Adminlogoutcontroller@index')->name('Admin.logout');

    Route::get('/dashboard', 'AdminController@index');

    Route::get ('/myprofile', 'registercontroller@display');


     Route::get('/editprofile/{id}', 'registercontroller@edit');
    Route::post('/editprofile/{id}', 'registercontroller@update');
    // .............

    Route::get ('/dashboard', 'photocontroller@displays');



    Route::get ('/photo', 'contentcontroller@photo');
    Route::get ('/book', 'contentcontroller@book');
    Route::get ('/video', 'contentcontroller@video');
   
    
    Route::get ('/dashboard', 'photocontroller@displays');
    
    
    
    Route::get ('/videoshow', 'contentcontroller@creatorvidshow');
    Route::get ('/pdfshow', 'contentcontroller@creatorpdfshow');
    
    
    Route::get ('/book', 'photocontroller@displays22');
    Route::get ('/video', 'photocontroller@displays11');
    Route::get ('/orderstatus', 'photocontroller@displays33');
    
    
    Route::post ('/jpgshow', 'photocontroller@store');
    Route::get ('/jpgshow', 'contentcontroller@creatorimgshow')->name('image.validation');
    

    
    Route::get ('/photo', 'photocontroller@display');
    
    Route::get('/editimage/{id}', 'photocontroller@edit'); 
    Route::post('/editimage/{id}', 'photocontroller@update');
    Route::get('/delete/{id}', 'photocontroller@delete');
    Route::get('/view/{id}','photocontroller@view');
    Route::get('/viewvideo/{id}','photocontroller@view11');
    Route::get('/viewpdf/{id}','photocontroller@view22');
    Route::get('/download/{image}', 'photocontroller@download');
    Route::post ('/videoshow', 'videocontroller@store');
    
    
    Route::get ('/videoformshow', 'photocontroller@videoshow');
    Route::post ('/videoformshow', 'photocontroller@store11');
    
    Route::get ('/pdfformshow', 'photocontroller@pdfshow');
    Route::post ('/pdfformshow', 'photocontroller@store22');
    
    
   
 });