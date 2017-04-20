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

//Route::get('/', function () {
//    return view('welcome');
//});

//frontend routes
Route::get('/','WelcomeController@index');
Route::get('/about','WelcomeController@about');
Route::get('/services','WelcomeController@services');
Route::get('/blog','WelcomeController@blog');
Route::get('/contact','WelcomeController@contact');
//frontend routes ends


//admin login routes
Route::get('/admin_login','AdminController@index');
Route::post('/admin_login_check','AdminController@admin_login_check');
//admin login routes ends


/*super admin starts*/
Route::get('/admin_dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');

//category starts
Route::get('/add_category','SuperAdminController@add_category');
Route::post('/save_category','SuperAdminController@save_category');
Route::get('/manage_category','SuperAdminController@manage_category');
Route::get('/manage_category','SuperAdminController@manage_category');
Route::get('/unpublish_category/{category_id}','SuperAdminController@unpublish_category');
Route::get('/publish_category/{category_id}','SuperAdminController@publish_category');
Route::get('/delete_category/{category_id}','SuperAdminController@delete_category');
Route::get('/update_category/{category_id}','SuperAdminController@update_category');
Route::post('/edit_category','SuperAdminController@edit_category');
//category ends

//blog start
Route::get('/add_blog','SuperAdminController@add_blog');
Route::post('/save_blog','SuperAdminController@save_blog');
Route::get('/manage_blog','SuperAdminController@manage_blog');
Route::get('/unpublish_blog/{blog_id}','SuperAdminController@unpublish_blog');
Route::get('/publish_blog/{blog_id}','SuperAdminController@publish_blog');
Route::get('/delete_blog/{blog_id}','SuperAdminController@delete_blog');
Route::get('/blog_details/{blog_id}','WelcomeController@blog_details');
//blog ends
/*super admin ends*/

