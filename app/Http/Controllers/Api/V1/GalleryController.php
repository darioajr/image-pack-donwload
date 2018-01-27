<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class GalleryController extends Controller {

    const MODEL = "App\Models\Gallery";

    use RESTActions;

    public function zip($id)
    {
        $m = self::MODEL;
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    
        //return response()->download($pathToFile);

        //return response()->download($pathToFile, $name, $headers);    
    }


}
