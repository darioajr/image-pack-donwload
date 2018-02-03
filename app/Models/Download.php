<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"url", "parent"}, type="object", @SWG\Xml(name="Download"))
 */
class Download extends Model {

    protected $fillable = ["url", "parent"];

    public static $rules = [
        "url" => "required",
        "parent" => "required",
    ];

}