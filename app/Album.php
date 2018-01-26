<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

    protected $fillable = ["name"];

    public static $rules = [
        "name" => "required",
    ];

}