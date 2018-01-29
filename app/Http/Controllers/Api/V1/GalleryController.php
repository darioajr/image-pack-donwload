<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Chumper\Zipper\Zipper;

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
    
        $folder_path = public_path('albums/'.$album->name.'/galleries/'.$gallery->name);
        $files = glob($folder_path .'/*');
        
        $filename = $album->name .'_'. $gallery->name .'_'. uniqid().'.zip';

        $zipper = new Zipper;
        $zipper->make(public_path('download/'.$filename))->add($files)->close();
        //adicionar aqui o arquivo indice
        //Zipper::make(public_path('download/'.$filename))->add($files);
    
        return response()->download(public_path('download/'.$filename))->deleteFileAfterSend(true);; 
    }

    
}
