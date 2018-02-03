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

$router->group(['middleware' => 'auth:api', 'prefix' => 'api/v1'], function($router){
    /**
     * Imagem for resource task
     */

    $router->get('image', 'Api\V1\ImageController@all');
    $router->get('image/{id}', 'Api\V1\ImageController@get');
    $router->get('image/{id}/{type}', 'Api\V1\ImageController@getType');
    $router->get('image_name/{name}', 'Api\V1\ImageController@getName');
    $router->get('image_name/{name}/{type}', 'Api\V1\ImageController@getNameType');
    //$router->post('image', 'Api\V1\ImageController@add');
    //$router->put('image/{id}', 'Api\V1\ImageController@put');
    //$router->delete('image/{id}', 'Api\V1\ImageController@remove');

    /**
     * Gallery for resource task
     */
    $router->get('gallery', 'Api\V1\GalleryController@all');
    $router->get('gallery/{id}', 'Api\V1\GalleryController@get');
    $router->get('gallery/{id}/zip', 'Api\V1\GalleryController@getZip');
    $router->get('gallery/{id}/zipurl', 'Api\V1\GalleryController@getZipUrl');
    $router->get('gallery_name/{name}', 'Api\V1\GalleryController@getName');
    $router->get('gallery_name/{name}/{type}', 'Api\V1\GalleryController@getNameType');
    //$router->post('gallery', 'Api\V1\GalleryController@add');
    //$router->put('gallery/{id}', 'Api\V1\GalleryController@put');
    //$router->delete('gallery/{id}', 'Api\V1\GalleryController@remove');

    /**
     * Albums for resource task
     */
    $router->get('album', 'Api\V1\AlbumController@all');
    $router->get('album/{id}', 'Api\V1\AlbumController@get');
    $router->get('album/{id}/{type}', 'Api\V1\AlbumController@getType');
    $router->get('album_name/{name}', 'Api\V1\AlbumController@getName');
    $router->get('album_name/{name}/zip', 'Api\V1\AlbumController@getNameType');
    //$router->post('album', 'Api\V1\AlbumController@add');
    //$router->put('album/{id}', 'Api\V1\AlbumController@put');
    //$router->delete('album/{id}', 'Api\V1\AlbumController@remove');

});






