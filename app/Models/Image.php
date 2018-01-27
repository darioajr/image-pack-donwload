<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    protected $fillable = ["name", "file_path", "gallery_id"];

    public static $rules = [
        "name" => "required",
        "file_path" => "required",
        "gallery_id" => "required|numeric",
    ];

    public function gallery()
    {
        return $this->belongsTo("App\Gallery");
    }


}
