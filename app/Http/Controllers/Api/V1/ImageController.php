<?php 

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Chumper\Zipper\Zipper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Download;
use App\Models\Image;

class ImageController extends Controller {


     /**
     * @SWG\Get(
     *     path="/image/findByName",
     *     summary="Lista imagens pelo nome",
     *     tags={"image"},
     *     description="Lista multiplas imagens pelo nome informado, pode ser utilizado nome parcial, e separado por virgula para informar multiplos nomes. Ex.: H21X, H22X, GH7BL1.",
     *     operationId="findByName",
     *     produces={"application/json", "application/zip"},
     *     @SWG\Parameter(
     *         name="filter",
     *         in="query",
     *         description="Nome para o filtro",
     *         required=true,
     *         type="array",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Parameter(
     *         name="type",
     *         in="query",
     *         description="Tipo do retorno",
     *         required=false,
     *         type="array",
     *          @SWG\Items(
     *             type="string",
     *             enum={"url", "zip"},
     *             default="url"
     *         )
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Image")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized.",
     *     ),
     *     @SWG\Response(
     *         response=201,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="file"
     *         ),
     *     ),
     *     security={
     *         {"passport": {}},
     *     },
     * )
     */
    public function findByName(Request $request)
    {
        $filter = $request->input('filter');
        $type = $request->input('type');
        $imagens = Image::where('name', 'like', "%{$filter}%")->get();

        if(is_null($imagens)){
            return response()->json(Response::HTTP_NOT_FOUND);
        }
        
        if ($type == "zip") {
            $filename = uniqid().'.zip';
            $zipper = new Zipper;
            $zipper->make(public_path('download/'.$filename));
            foreach ($imagens as $imagem) {
                $zipper->add($imagem->file_path);
            }
            $zipper->close();
            $headers = array(
                'Content-Type: application/zip',
            );
    
            return response()->download(public_path('download/'.$filename), $filename, $headers);
        }
        else {
            foreach ($imagens as $imagem) {
                $old = public_path();
                $new = url('/').'/';
                $imagem->file_path = str_replace($old, $new, $imagem->file_path);
            }
            return response()->json($imagens, Response::HTTP_OK);
        }
    }

}
