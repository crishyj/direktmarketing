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
    return view('index');
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/impressum', 'CustomerController@impressum')->name('impressum');

Route::get('/', 'CustomerController@index')->name('/');
Route::get('/category', 'CustomerController@category')->name('customer.category');
Route::get('/country', 'CustomerController@country')->name('customer.country');
Route::get('/supplier', 'CustomerController@supplier')->name('customer.supplier');
Route::get('/description', 'CustomerController@description')->name('customer.description');
Route::get('/customer_register', 'CustomerController@register')->name('customer.register');
Route::post('/customer_register', 'CustomerController@create')->name('customer.create');
Route::get('/splash', 'CustomerController@splash')->name('customer.splash');
Route::get('/customer/{id}', 'CustomerController@show')->name('customer.show');
Route::get('/customerVerify', 'CustomerController@customerVerify')->name('customer.customerVerify');
Route::post('/customerVerify', 'CustomerController@verify')->name('customer.verification');

Route::get('/contact', 'SupplierController@contact_request')->name('supplier.contactRequest');
Route::post('/contact', 'SupplierController@contact_send')->name('supplier.contactSend');

Route::any('/userdashboard', 'DashboardController@index')->name('dashboard.index');

Route::any('/dashboard', 'DashboardController@admin')->name('dashboard.admin');
Route::get('/dashboard/delete/{id}', 'CustomerController@delete')->name('customer.delete');

Route::get('/dashboard/adword', 'AdwordController@index')->name('dashboard.adwords');
Route::post('/dashboard/adword', 'AdwordController@edit')->name('dashboard.adwords.edit');

Route::get('/dashboard/advertise', 'AdvertiseController@index')->name('advertise.index');
Route::get('/dashboard/advertise/create', 'AdvertiseController@create')->name('advertise.create');
Route::post('/dashboard/advertise/create', 'AdvertiseController@store')->name('advertise.store');
Route::post('/dashboard/advertise', 'AdvertiseController@update')->name('advertise.update');
Route::get('/dashboard/advertise/{id}', 'AdvertiseController@delete')->name('advertise.delete');