<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','SiteController@site');
Route::get('/menu','SiteController@menus')->name('menus');
Route::get('/contact_us','SiteController@contact_us')->name('contact_us');
Route::post('send/mail','SiteController@send_mail')->name('send_mail');
Route::get('/about','SiteController@about')->name('about');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Site

Route::group(['middleware'=>'auth'],function(){

   Route::get('/add-to-cart/{menu}','CartController@add')
        ->name('add_to_cart');

   Route::get('cart/view','CartController@index')
        ->name('cart.index');
        
   Route::get('/cart/update/{itemId}','CartController@update')
        ->name('cart.update');

    Route::get('/cart/destroy/{itemId}','CartController@destroy')
        ->name('cart.destroy')->middleware('auth');

   Route::get('/checkout','CartController@checkout')
                ->name('cart.checkout'); 

   Route::get('/cart/apply-coupon', 'CartController@applyCoupon')
        ->name('cart.coupon');

   //Order 
   Route::resource('/orders',  'OrderController');

});



Route::group(['prefix'=>'admin'],function(){

    //Dashboard
    Route::get('dashboard','Admin\AdminController@dashboard');

    //Menus
    Route::get('plate/create','Admin\MenuController@create')
            ->name('admin.plate.create');
    Route::post('plate/store','Admin\MenuController@store')
            ->name('admin.plate.store');        
    Route::get('plate/show','Admin\MenuController@show')
            ->name('admin.plate.show');
    Route::get('plate/edit/{id}','Admin\MenuController@edit')
            ->name('admin.plate.edit');
    Route::patch('plate/update/{id}','Admin\MenuController@update')
            ->name('admin.plate.update'); 
    Route::delete('plate/destroy/{id}','Admin\MenuController@destroy')
            ->name('admin.plate.destroy');   
            
    
        //Orders
     Route::get('order/create','Admin\OrderController@create')
        ->name('admin.order.create');
     Route::post('order/store','Admin\OrderController@store')
                ->name('admin.order.store');        
     Route::get('order/show','Admin\OrderController@show')
                ->name('admin.order.show');
     Route::get('order/edit/{id}','Admin\OrderController@edit')
                ->name('admin.order.edit');
     Route::patch('order/update/{id}','Admin\OrderController@update')
                ->name('admin.order.update'); 
     Route::delete('order/destroy/{id}','Admin\OrderController@destroy')
                ->name('admin.order.destroy');
     Route::get('order/view/{id}','Admin\OrderController@view')
                ->name('admin.order.view');   
                
     //User
     Route::get('admin/users','Admin\UserController@users')
                ->name('admin.users');
           
     //Mails
     Route::get('mails','Admin\MailController@mails')
                ->name('admin.mails');           
     Route::post('mail/destroy/{id}','Admin\MailController@mails')
                ->name('admin.mail.destroy');   
                
     //Coupon
     Route::get('coupon/create','Admin\CouponController@create')
                ->name('admin.coupon.create');   
                
     Route::get('coupons','Admin\CouponController@show')
        ->name('admin.coupons');     
        
     Route::post('coupon/store','Admin\CouponController@store')
        ->name('admin.coupon.store');
        
     Route::get('coupon/edit/{id}','Admin\CouponController@edit')
        ->name('admin.coupon.edit');  
        
     Route::patch('coupon/update/{id}','Admin\CouponController@update')
        ->name('admin.coupon.update');  
        
     Route::patch('coupon/destroy/{id}','Admin\CouponController@destroy')
        ->name('admin.coupon.destroy');   
});
