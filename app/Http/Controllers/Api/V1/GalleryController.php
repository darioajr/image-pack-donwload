<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class GalleryController extends Controller {

    const MODEL = "App\Models\Gallery";
    const ALBUM = "App\Models\Album";

    use RESTActions;

    public function zip($id)
    {
        $g = self::MODEL;
        $gallery = $g::find($id);
        if(is_null($gallery)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $a = self::ALBUM;
        $album = $a::find($gallery->album_id);
    
        $files = glob(public_path($album->name.'/galleries/'.$gallery->name .'/*'));
        $filename = $album->name .'_'. $gallery->name .'_'. uniqid().'.zip';
        Zipper::make(public_path('download/'.$filename))->add($files);
    
        return response()->download(public_path('download/'.$filename)); 
    }

    
}
