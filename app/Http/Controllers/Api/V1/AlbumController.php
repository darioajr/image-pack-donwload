<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class AlbumController extends Controller {

    const MODEL = "App\Models\Album";

    use RESTActions;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

}
