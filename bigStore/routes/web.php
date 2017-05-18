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

Route::get('/', 'WelcomeController@index');
Route::get('/category{id}', 'WelcomeController@category');
Route::get('/productDetails/{id}', 'WelcomeController@productDetails');
Route::post('/addToCart', 'AddToCartController@addToCart');
Route::get('/cartShow', 'AddToCartController@showCart');
Route::get('/cartDelete/{id}', 'AddToCartController@deleteCartProduct');
Route::get('/checkout/index', 'CheckoutController@index');
Route::post('/newCustomer', 'CheckoutController@storeCustomer');
Route::get('/shippingInfo', 'CheckoutController@showShippingForm');
Route::post('/newShipping', 'CheckoutController@saveShippingInfo');
Route::get('/paymentInfo', 'CheckoutController@showPaymentForm');
Route::post('/newOrder', 'CheckoutController@saveOrderInfo');
Route::get('/myHome', 'CheckoutController@customerHome');
Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::get('/addCategory','CategoryController@createCategory');
Route::post('/newCategory','CategoryController@storeCategory');
Route::get('/manageCategory','CategoryController@showCategory');
Route::get('/editCategory{id}','CategoryController@editCategory');
Route::post('/updateCategory','CategoryController@updateCategory');
Route::get('/deleteCategory{id}','CategoryController@deleteCategory');

Route::get('/addManufacture','ManufactureController@createManufacture');
Route::post('/storeManufacture','ManufactureController@storeManufacture');
Route::get('/manageManufacture','ManufactureController@showManufacture');
Route::get('/editManufacture{id}','ManufactureController@editManufacture');
Route::post('/updateManufacture','ManufactureController@updateManufacture');
Route::get('/deleteManufacture{id}','ManufactureController@deleteManufacture');

Route::get('/addProduct', 'ProductController@createProduct');
Route::post('/storeProduct', 'ProductController@storeProduct');
Route::get('/manageProduct', 'ProductController@manageProduct');
Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct');
Route::get('/viewProduct{id}', 'ProductController@viewProduct');

Route::get('/addSlider','SliderController@createSlider');
Route::post('/storeSlider','SliderController@storeSliderImage');
Route::get('/manageSlider','SliderController@manageSliderImage');
Route::get('/deleteSliderImage{id}','SliderController@deleteSlider');

Route::get('/contactUs','ContractUsController@getContactInfo');
Route::post('/storeContactUs','ContractUsController@postContactInfo');