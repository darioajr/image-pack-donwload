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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$app->get("api/v{version}/users", function ($version) use ($app) {
//    return $app->make("App\Api\V{$version}\Controllers\UserController")->show();
//});

$router->group(['prefix' => 'api/v1'], function($router){
    /**
     * Imagem for resource task
     */

    $router->get('image', 'Api\V1\ImageController@all');
    $router->get('image/{id}', 'Api\V1\ImageController@get');
    
    //$router->post('image', 'Api\V1\ImageController@add');
    //$router->put('image/{id}', 'Api\V1\ImageController@put');
    //$router->delete('image/{id}', 'Api\V1\ImageController@remove');

    /**
     * Gallery for resource task
     */
    $router->get('gallery', 'Api\V1\GalleryController@all');
    $router->get('gallery/{id}', 'Api\V1\GalleryController@get');
    //$router->post('gallery', 'Api\V1\GalleryController@add');
    //$router->put('gallery/{id}', 'Api\V1\GalleryController@put');
    //$router->delete('gallery/{id}', 'Api\V1\GalleryController@remove');

    /**
     * Albums for resource task
     */
    $router->get('album', 'Api\V1\AlbumController@all');
    $router->get('album/{id}', 'Api\V1\AlbumController@get');
    //$router->post('album', 'Api\V1\AlbumController@add');
    //$router->put('album/{id}', 'Api\V1\AlbumController@put');
    //$router->delete('album/{id}', 'Api\V1\AlbumController@remove');

});




