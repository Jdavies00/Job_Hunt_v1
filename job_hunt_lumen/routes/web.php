<?php
/** @var \Laravel\Lumen\Routing\Router $router */

// use Illuminate\Http\Client\Request;
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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('id/{id}',function ($id){
    return 'id: '. $id;
});

use Illuminate\Http\Request;
$router -> group(['middleware' => 'auth'], function() use ($router){

    $router -> get('/api/user/{id}/details/{param1}', function($id){
        $user=($id);
        return $user -> toArray();    
    });
    $router -> get('/api/user', function(Request $request){
        $user = $request-> user();
        return $user ->toArray();
    });
});
$router->post('/register', 'UsersController@register');

$router ->get ('/api/user','UsersController@login');

$router ->get('/logout','UsersController@logout');