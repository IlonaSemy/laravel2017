<?php

Route::get('/', 'PagesController@home'); 
Route::get('about', 'PagesController@about');  
Route::get('shop', 'ShopController@categories'); 
Route::get('shop/{category_url}', 'ShopController@products'); 
Route::get('shop/{category_url}/{product_url}', 'ShopController@item'); 

