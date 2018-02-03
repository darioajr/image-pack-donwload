<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Chumper\Zipper\Zipper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Download;

class GalleryController extends Controller {

    const MODEL = "App\Models\Gallery";
    const ALBUM = "App\Models\Album";
    const DOWNLOAD = "App\Models\Download";

    use RESTActions;

    /**
     * @SWG\Get(
     *     path="/gallery/{id}/zip",
     *     summary="Get image info ",
     *     tags={"gallery"},
     *     description="Baixar pacote de imagens pelo Id da galeria.",
     *     operationId="zip",
     *     produces={"application/zip"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Código da Galeria",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="file"
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     *     security={
     *         {"passport": {}},
     *     },
     * )
     */
    public function getZip($id)
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

        $headers = array(
            'Content-Type: application/zip',
        );

        return response()->download(public_path('download/'.$filename), $filename, $headers);

    }

    /**
     * @SWG\Get(
     *     path="/gallery/{id}/zipurl",
     *     summary="Get image info ",
     *     tags={"gallery"},
     *     description="Baixar pacote de imagens pelo Id da galeria.",
     *     operationId="zip",
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Código da Galeria",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Gallery")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     *     security={
     *         {"passport": {}},
     *     },
     * )
     */
    public function getZipUrl($id)
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
    
        $download = new Download;
        $download->fill(['url' =>  url('/').'/download/'.$filename, 'parent' => $gallery->toJson()]);
  
        return response()->json($download, Response::HTTP_OK);

    }

    
}
