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

$router->bind('song',function($slug)
{
    return App\Song::whereSlug($slug)->first();
});

$router->get('song', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
$router->get('song/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);


// $router->resource('songs', 'SongsController', [
//  'except' => [
//      'create'
//  ]
// ]);