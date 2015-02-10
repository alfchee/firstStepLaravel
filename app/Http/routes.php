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

$router->bind('songs',function($slug)
{
    return App\Song::whereSlug($slug)->first();
});


$router->resource('songs', 'SongsController', [
    'names' => [
        'index' => 'songs_path',
        'show' => 'song_path'
    ],
    'only' => ['index','show']
]);