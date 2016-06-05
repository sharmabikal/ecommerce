<?php

Route::get('/','SiteController@index');

Route::get('contact','SiteController@contact');

Route::get('product','ProductController@product');

Route::get('product/{slug}',['uses' => 'SingleController@single','as'=>'productDetail']);

Route::post('contact',['uses' => 'SiteController@postContact','as' => 'postContact']);

Route::get('register',['uses' => 'SiteController@register','as' => 'register']);

Route::post('register',['uses' => 'SiteController@postRegister','as' => 'postRegister']);

Route::get('account',['uses' => 'AccountController@account', 'as' =>'account']);