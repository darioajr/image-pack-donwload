<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

    protected $fillable = ["name", "folder_path"];

    public static $rules = [
        "name" => "required",
        "folder_path" => "required",
    ];

}