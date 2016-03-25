<?php

 header("Access-Control-Allow-Origin: *");
       // header("Access-Control-Allow-Headers: Content-Type");

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('lumen/public/getdata','PlaceController@index');
$app->get('lumen/public/getplace','PlaceController@getPlace');
//$app->get('place/{id}','App\Http\Controllers\PlaceController@getPlace');
$app->post('lumen/public/add','PlaceController@savePlace');
//$app->put('update/{id}','App\Http\Controllers\PlaceController@updatePlace');
//$app->delete('delete/{id}','App\Http\Controllers\PlaceController@deletePlace');
$app->get('lumen/public/login','PlaceController@login');
$app->post('lumen/public/register','PlaceController@register');




?>
