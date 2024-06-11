<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\AuthController;
//use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;
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

	return view('home');
	//return '¡Hola Mundo!';
	//return $router->app->version();
});




Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/profile', function () {
        return auth()->user();
    });
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('contratos', 'ContratoController@index');
    $router->post('contratos', 'ContratoController@store');
    $router->get('contratos/{id}', 'ContratoController@show');
    $router->put('contratos/{id}', 'ContratoController@update');
    $router->delete('contratos/{id}', 'ContratoController@destroy');
});


use App\Http\Controllers\ContratoController;



$router->get('activos', ['as' => 'activos.index', 'uses' => 'ActivoInformaticoController@index']);
$router->get('activos/create', ['as' => 'activos.create', 'uses' => 'ActivoInformaticoController@create']);
$router->post('activos', ['as' => 'activos.store', 'uses' => 'ActivoInformaticoController@store']);
$router->get('activos/{id}/edit', ['as' => 'activos.edit', 'uses' => 'ActivoInformaticoController@edit']);
$router->put('activos/{id}', ['as' => 'activos.update', 'uses' => 'ActivoInformaticoController@update']);
$router->post('activos/destroy', ['as' => 'activos.destroy', 'uses' => 'ActivoInformaticoController@destroy']);

$router->get('/presupuestos', 'PresupuestoController@index');
$router->get('/presupuestos/{id}', 'PresupuestoController@show');
$router->post('/presupuestos', 'PresupuestoController@create');
$router->put('/presupuestos/{id}', 'PresupuestoController@update');
$router->delete('/presupuestos/{id}', 'PresupuestoController@delete');





