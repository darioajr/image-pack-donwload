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
    return redirect('/api/documentation');
});

$router->group(['middleware' => 'auth:api', 'prefix' => 'api/v1'], function($router){
    /**
     * Imagem for resource task
     */

    $router->get('image/findByName', 'Api\V1\ImageController@findByName');


    /**
     * Gallery for resource task
     */
    $router->get('gallery', 'Api\V1\GalleryController@all');
    $router->get('gallery/{id}', 'Api\V1\GalleryController@get');
    //$router->get('gallery/{id}/zip', 'Api\V1\GalleryController@getZip');
    //$router->get('gallery/{id}/zipurl', 'Api\V1\GalleryController@getZipUrl');
    //$router->post('gallery', 'Api\V1\GalleryController@add');
    //$router->put('gallery/{id}', 'Api\V1\GalleryController@put');
    //$router->delete('gallery/{id}', 'Api\V1\GalleryController@remove');

    /**
     * Albums for resource task
     */
    $router->get('album', 'Api\V1\AlbumController@all');
    $router->get('album/{id}', 'Api\V1\AlbumController@get');
    //$router->get('album/{id}/{type}', 'Api\V1\AlbumController@getType');
    //$router->get('album_name/{name}', 'Api\V1\AlbumController@getName');
    //$router->get('album_name/{name}/zip', 'Api\V1\AlbumController@getNameType');
    //$router->post('album', 'Api\V1\AlbumController@add');
    //$router->put('album/{id}', 'Api\V1\AlbumController@put');
    //$router->delete('album/{id}', 'Api\V1\AlbumController@remove');

});






