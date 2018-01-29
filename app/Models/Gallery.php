<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
