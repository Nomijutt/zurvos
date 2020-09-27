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
Route::get('/','AdminAuth\LoginController@showLoginForm');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::get('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  Route::get('/home','Admin\HomeController@home');
  Route::group(['namespace'=>'Admin'],function(){
                          
                          // Gym routes

    // Add Gym 
    Route::get('add-gym','GymsController@addGym')->name('add-gym');
    Route::post('add-gym','GymsController@storeGym')->name('add-gym');

    Route::get('manage-users','CustomersController@manageUsers')->name('manage-users');
    Route::get('affiliate-partners','AffiliatePartnerController@viewAllOrders')
    ->name('affiliate-partners');

    // Partners Controller
    Route::get('add-partner','PartnerController@addPartner')->name('add-partner');
    Route::post('add-partner','PartnerController@storePartner')->name('add-partner');

    // Upload Tutorial Controller
    Route::get('upload-tutorial','TutorialController@uploadTutorial')->name('upload-tutorial');
    Route::post('upload-tutorial','TutorialController@storeTutorial')->name('upload-tutorial');
    // Product Controller
    Route::get('add-product','ProductsController@addProduct')->name('add-product');
    Route::post('add-product','ProductsController@storeProduct')->name('add-product');
  });
});

Route::group(['prefix' => 'gym'], function () {
  Route::get('/login', 'GymAuth\LoginController@showLoginForm');
  Route::post('/login', 'GymAuth\LoginController@login');
  Route::post('/logout', 'GymAuth\LoginController@logout');

  Route::get('/register', 'GymAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'GymAuth\RegisterController@register');

  Route::post('/password/email', 'GymAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'GymAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'GymAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'GymAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'partner'], function () {
  Route::get('/login', 'PartnerAuth\LoginController@showLoginForm');
  Route::post('/login', 'PartnerAuth\LoginController@login');
  Route::post('/logout', 'PartnerAuth\LoginController@logout');

  Route::get('/register', 'PartnerAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'PartnerAuth\RegisterController@register');

  Route::post('/password/email', 'PartnerAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'PartnerAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'PartnerAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'PartnerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'influence'], function () {
  Route::get('/login', 'InfluenceAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'InfluenceAuth\LoginController@login');
  Route::post('/logout', 'InfluenceAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'InfluenceAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'InfluenceAuth\RegisterController@register');

  Route::post('/password/email', 'InfluenceAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'InfluenceAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'InfluenceAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'InfluenceAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployeeAuth\LoginController@login');
  Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmployeeAuth\RegisterController@register');

  Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
});
