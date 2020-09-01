<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/','BigShopController@index');

Route::get('/contact-us',[
	'uses'=>'BigShopController@contactUs',
	'as'=>'contact'
]);

Route::get('/category-product/{id}',[
	'uses'=>'BigShopController@categoryProduct',
	'as'=>'category-product'
]);

Route::get('/category-detail',[
	'uses'=>'BigShopController@cartDetail',
	'as'=>'care-detail'
]);

Route::get('/product-details/{id}',[
	'uses'=>'BigShopController@productDetails',
	'as'=>'product-details'
]);


// All Category route is here......

Route::get('/category/add',[
   'uses'=>'CategoryController@addCategory',
   'as'=>'add-category'
]);

Route::get('/category/manage',[
   'uses'=>'CategoryController@manageCategory',
   'as'=>'manage-category'
]);

Route::post('/category/save',[
    'uses'=>'CategoryController@saveCategory',
    'as'=>'new-category'
]);

Route::get('/category/unpublished/{id}',[
   'uses'=>'CategoryController@unpublishedCategoryInfo',
    'as'=>'unpublished-category'
]);

Route::get('/category/published/{id}',[
   'uses'=>'CategoryController@publishedCategoryInfo',
   'as'=>'published-category'
]);

Route::get('/category/edit/{id}',[
   'uses'=>'CategoryController@editCategoryInfo',
   'as'=>'edit-category'
]);

Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategoryInfo',
    'as'=>'update-category'
]);

Route::get('/category/delete/{id}',[
   'uses'=>'CategoryController@deleteCategoryInfo',
   'as'=>'delete-category'
]);

// All Brand route is here.....

Route::get('/brand/add',[
    'uses'=>'BrandController@addBrand',
    'as'=>'add-brand'
]);

Route::get('/brand/manage',[
   'uses'=>'BrandController@manageBrand',
   'as'=>'manage-brand'
]);

Route::post('/brand/save',[
    'uses'=>'BrandController@saveBrand',
    'as'=>'new-brand'
]);
Route::get('/brand/unpublished/{id}',[
    'uses'=>'BrandController@unpublishedBrandInfo',
    'as'=>'unpublished-brand'
]);

Route::get('/brand/published/{id}',[
    'uses'=>'BrandController@publishedBrandInfo',
    'as'=>'published-brand'
]);

Route::get('/brand/edit/{id}',[
    'uses'=>'BrandController@editBrandInfo',
    'as'=>'edit-brand'
]);

Route::post('/brand/update',[
    'uses'=>'BrandController@updateBrandInfo',
    'as'=>'update-brand'
]);

Route::get('/brand/delete/{id}',[
    'uses'=>'BrandController@deleteBrandInfo',
    'as'=>'delete-brand'
]);





// Product Route is here.........

Route::get('/product/add',[
   'uses'=>'ProductController@addProduct',
   'as'=>'add-product'
]);

Route::post('/product/save',[
    'uses'=>'ProductController@saveProduct',
    'as'=>'new-product'
]);

Route::get('/product/manage',[
   'uses'=>'ProductController@manageProduct',
   'as'=>'manage-product'
]);


Route::get('/product/edit/{id}',[
    'uses'=>'ProductController@editProduct',
    'as'=>'edit-product'
]);
Route::post('/product/update',[
    'uses'=>'ProductController@updateProduct',
    'as'=>'update-product'
]);

Route::get('/product/unpublished/{id}',[
    'uses'=>'ProductController@unpublishedProductInfo',
    'as'=>'unpublished-product'
]);

Route::get('/product/published/{id}',[
    'uses'=>'ProductController@publishedProductInfo',
    'as'=>'published-product'
]);

Route::get('/product/delete/{id}',[
    'uses'=>'ProductController@deleteProductInfo',
    'as'=>'delete-product'
]);

Route::get('/product/view/{id}',[
    'uses'=>'ProductController@viewProductInfo',
    'as'=>'view-product'
]);

// All Cart details is here......

Route::post('/add-to-cart',[
    'uses'=>'CartController@addtoCart',
    'as'=>'add-to-cart'
]);

Route::get('/show-cart',[
   'uses'=>'CartController@showCart',
   'as'=>'show-cart'
]);

Route::get('/delete-cart-product/{id}','CartController@deleteCartProduct');
Route::post('/update-cart','CartController@updateCartProduct');

//All Checkout details is here

Route::get('/checkout','CheckoutController@checkOut');
Route::post('/new-customer','CheckoutController@saveCustomerInfo');

Route::get('/checkout/show-shipping','CheckoutController@showShippingInfo');
Route::post('/checkout/new-shipping','CheckoutController@saveShippingInfo');

Route::get('/checkout/show-payment',[
    'uses'=>'CheckoutController@showPaymentInfo',
    'as'=>'show-payment'
]);
Route::post('/checkout/new-order',[
    'uses'=>'CheckoutController@saveOrderInfo',
    'as'=>'new-order'
]);

Route::get('/checkout/complete-order',[
    'uses'=>'CheckoutController@completeOrderInfo',
    'as'=>'complete-order'
]);

Route::get('/customer-logout',[
     'uses'=>'CheckoutController@customerLogout',
    'as'=>'customer-logout'
]);

Route::post('/customer-login',[
    'uses'=>'CheckoutController@customerLogin',
    'as'=>'customer-login'
]);

//All order details is here.....

Route::get('/order/manage-order',[
    'uses'=>'OrderController@manageOrder',
    'as'=>'manage-order'
]);

Route::get('/order/view-order-details/{id}',[
    'uses'=>'OrderController@viewOrderDetails',
    'as'=>'view-order'
]);

Route::get('/order/view-order-invoice/{id}',[
    'uses'=>'OrderController@viewOrderInvoice',
    'as'=>'view-invoice'
]);
Route::get('/order/download-invoice/{id}',[
    'uses'=>'OrderController@downloadOrderInvoice',
    'as'=>'download-invoice'
]);
Route::get('/order/delete-order/{id}',[
   'uses'=>'OrderController@deleteOrderInfo',
   'as'=>'delete-order'
]);
