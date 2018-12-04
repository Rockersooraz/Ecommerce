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


Route::get('/','HomeController@main')->name('main');

Auth::routes(['verify'=>true]);

Route::get('/search','Search\SearchController@search')->name('search');
Route::get('/searchdetail/{id}','Search\SearchController@detail')->name('search.detail');


//Cart
Route::resource('/cart','Cart\CartController');
Route::resource('/address','Address\AddressController');
Route::get('/checkout','Checkout\CheckoutController@shipping')->name('checkout');
//payment related routes
Route::get('/payment-proceed','Checkout\CheckoutController@paymentproceed')->name('payment.proceed');
Route::get('/pay-with-paypal','Checkout\CheckoutController@paywitpaypal')->name('payment.paypal');
Route::get('/paypal-success','Checkout\CheckoutController@paypalsuccess')->name('payment.paypalsuccess');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/admin/editor', 'EditorController@index')->name('editor');
//Admin AUthentication
Route::get('admin/home','AdminController@index')->name('admin.home');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
// Route::post('/logout',' Admin\LoginController@logout')->name('admin.logout');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset')->name('admin.password.update');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


// Route::get('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
// Route::post('admin/register','Admin\RegisterController@register');

Route::group(['prefix' => 'admin','middleware' =>'auth:admin'], function(){

   Route::resource('/category','Category\CategoryController');
   Route::resource('/post','Post\PostController');
   Route::get('/user-details','AdminController@userdetails')->name('userdetails');
   //type is argument which is optional 
   Route::get('/orders/{type?}','Order\OrderController@orders');
   Route::post('/toogledeliver/{orderId}','Order\OrderController@toogledeliver')->name('toogle.deliver');

});




                             

