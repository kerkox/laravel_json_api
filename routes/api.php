<?php

use CloudCreativity\LaravelJsonApi\Facades\JsonApi;
use Illuminate\Support\Facades\Route;

//Route::get('articles/{article}', 'ArticleController@show')->name('api.v1.articles.read');
//Route::get('articles', 'ArticleController@index')->name('api.v1.articles.index');

JsonApi::register('v1')->routes(function($api){
    $api->resource('articles');
});
