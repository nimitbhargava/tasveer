<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path', 'user_id'];

    private $imageFolder = "/tasveer/";

    public function getPath($photo, $user) {
        if(!$photo->path || !$user) {
            return '';
        }

        return "$this->imageFolder/$user->id/$photo->path";
    }
}
