<?php
/** @var \Laravel\Lumen\Routing\Router $router */

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

$router -> group(['middleware' => 'auth'], function() use ($router){
    $router -> get('/api/user/{id}/details/{param1}', function($id){
        $user=($id);
        return $user -> toArray();
        
    });
});
$router->post('/register', 'UsersController@register');

$router ->get ('/login','UserController@login');

