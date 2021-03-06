<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index')->name('home');

Route::get('home', 'HomeController@index');
Route::get('/produks', 'FrontController@produks')->name('produks');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/product', function () {
    return view('product');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/password', function () {
    return view('password');
});

Route::get('/admin', function () {
    return view('admin');
    // return view('welcome');
})->name('admin.index');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout'); 
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::post('/shoping-cart ', 'Auth\AuthController@postShoping-cart');

Route::group(['middleware' => ['auth']], function()
{
	Route::get('/home','HomeController@index');
	Route::get('admin',function(){
		if(Auth::user()->admin==1){
			return view('admin');
		}else{
			return view('index');
	}
	});
	Route::resource('product','ProductController');
	Route::resource('category','CategoriesController');
	
});
Route::get('admin', ['middleware' => ['auth','admin'],function (){
	return view('admin');
}]);	

Route::resource('address','AddressController');
Route::get('checkout','CheckoutController@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');
