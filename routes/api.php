<?php

use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

JsonApi::register('v1')->routes(function($api){
    $api->resource('articles')->only('create', 'update', 'delete')->middleware('auth');
    $api->resource('articles')->except('create', 'update', 'delete');
    $api->resource('authors')->only('index', 'read');
});
