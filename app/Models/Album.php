<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"name", "folder_path"}, type="object", @SWG\Xml(name="Album"))
 */
class Album extends Model {

    protected $fillable = ["name", "folder_path"];

    public static $rules = [
        "name" => "required",
        "folder_path" => "required",
    ];

}