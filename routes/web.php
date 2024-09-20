<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// CRUD Users Routes
Route::get('/delete/{id}','UserOperationController@destroy');
Route::get('/addUser','UserOperationController@index');
Route::get('/userList','UserOperationController@userList')->name('userList');
Route::get('/blockList','UserOperationController@blockList')->name('blockList');
Route::get('/blockUser/{id}','UserOperationController@show');
Route::get('/unBlockUser/{id}','UserOperationController@unBlock');
Route::post('/updateUserStatus/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');
Route::get('profile', 'UserProfileController@profile')->name('profile');
Route::post('updateNameUser', 'UserProfileController@updateNameUser')->name('updateNameUser');
Route::post('updateUserImage', 'UserProfileController@updateUserImage')->name('updateUserImage');
Route::post('updateUserPass', 'UserProfileController@updateUserPass')->name('updateUserPass');
Route::get('/beautySalonList','UserOperationController@beautySalonList')->name('beautySalonList');
Route::get('/storeList','UserOperationController@storeList')->name('storeList');
Route::get('/normalUserList','UserOperationController@normalUserList')->name('normalUserList');


// Advertisement Section Routes
Route::get('/addAdv', 'AdvertisementController@add')->name('addAdv');
Route::get('/advertisement', 'AdvertisementController@index')->name('advertisement');
Route::get('/advertisementList','AdvertisementController@advertisementList')->name('advertisementList');
Route::post('/addAdvertisement', 'AdvertisementController@store')->name('addAdvertisement');
Route::get('/editAdvertisement/{id}','AdvertisementController@show')->name('editAdvertisement/{id}');
Route::post('/updatedAdvertisement/{id}','AdvertisementController@edit')->name('updatedAdvertisement/{id}');
Route::get('/deleteAdvertisement/{id}','AdvertisementController@destroy')->name('deleteAdvertisement/{id}');
Route::get('/blockAdv','AdvertisementController@blockAdv')->name('blockAdv');
Route::get('/unBlockAdv','AdvertisementController@unBlockAdv')->name('unBlockAdv');

// Post Section Routes
Route::get('/post', 'PostController@index')->name('post');
Route::post('/addPost', 'PostController@store')->name('addPost');
Route::get('/deletePost/{id}','PostController@destroy')->name('deletePost/{id}');
Route::get('/editPost/{id}','PostController@show')->name('editPost/{id}');
Route::post('/updatePost/{id}','PostController@edit')->name('updatePost/{id}');


// Serrices  Section Routes
Route::get('/services', 'ServiceController@index')->name('service');
Route::post('/addService', 'ServiceController@store')->name('addService');
Route::get('/deleteService/{id}','ServiceController@destroy')->name('deleteService/{id}');
Route::get('/editService/{id}','ServiceController@show')->name('editService/{id}');
Route::post('/updateService/{id}','ServiceController@edit')->name('updateService/{id}');


// Product Section Routes
Route::get('/product', 'ProductController@index')->name('product');
Route::post('/addProduct', 'ProductController@store')->name('addProduct');
Route::get('/deleteProduct/{id}','ProductController@destroy')->name('deleteProduct/{id}');
Route::get('/editProduct/{id}','ProductController@show')->name('editProduct/{id}');
Route::post('/updateProduct/{id}','ProductController@edit')->name('updateProduct/{id}');
Route::get('/details/{id}','ProductController@details')->name('details/{id}');
Route::get('publicProfile/details/{id}','ProductController@details')->name('details/{id}');
Route::get('productGeneralList','ProductController@productGeneralList')->name('productGeneralList');


// Search Section Routes
Route::post('/search', 'SearchController@search')->name('search');
Route::post('/searchBeautySalon', 'SearchController@searchBeautySalon')->name('searchBeautySalon');
Route::post('/searchStore', 'SearchController@searchStore')->name('searchStore');
Route::post('/searchProduct', 'SearchController@searchProduct')->name('searchProduct');
Route::get('/publicProfile/{id}', 'SearchController@publicProfile')->name('publicProfile/{id}');


// Comment & Rating Section Routes
Route::get('/comments', 'CommentController@index')->name('comments');
Route::post('/addComment', 'CommentController@store')->name('addComment');
Route::get('/deleteComment/{id}','CommentController@destroy')->name('deleteComment/{id}');
Route::get('/editComment/{id}','CommentController@show')->name('editComment/{id}');
Route::post('/updateComment/{id}','CommentController@edit')->name('updateComment/{id}');
