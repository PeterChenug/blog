<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/**
 * Home
*/
$app->get('/', 'WebController@index');
$app->get('article/{id}', 'WebController@detail');
/**
 * Backend
*/
$app->get('backend', 'AdminController@index');
$app->get('backend-article', 'AdminController@article');
$app->get('backend-article-create', 'AdminController@addArticle');
$app->post('backend-article-create', 'AdminController@addArticle');
