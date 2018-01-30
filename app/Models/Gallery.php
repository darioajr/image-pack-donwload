<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"name", "folder_path", "albums_id"}, type="object", @SWG\Xml(name="Gallery"))
 */
class Gallery extends Model {

    protected $fillable = ["name", "folder_path", "album_id"];

    public static $rules = [
        "name" => "required",
        "folder_path" => "required",
        "albums_id" => "required|numeric",
    ];

    public function album()
    {
        return $this->belongsTo("App\Album");
    }


}
