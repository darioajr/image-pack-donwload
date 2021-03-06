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

     /**
     * @SWG\Get(
     *     path="/gallery",
     *     summary="Listar todas as galerias",
     *     tags={"gallery"},
     *     description="Listar todas as galerias de imagens.",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized.",
     *     ),
     *     security={
     *         {"passport": {}},
     *     },
     * )
     */
    public function all()
    {
        $m = self::MODEL;
        return $this->respond(Response::HTTP_OK, $m::all());
    }

     /**
     * @SWG\Get(
     *     path="/gallery/{id}",
     *     summary="Lista galeria",
     *     tags={"gallery"},
     *     description="Lista todas as galerias que contenham o texto pesquisado no nome.",
     *     operationId="id",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Código da Galeria",
     *         required=true,
     *         type="string",
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
    public function get($id)
    {
        $m = self::MODEL;
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }

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
