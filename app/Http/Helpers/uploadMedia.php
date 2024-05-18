<?php


namespace App\Http\Helpers;

use App\Models\Restaurant;
use App\Models\Post;


trait uploadMedia {
    public function singleMedia($title,$media,$path ='burger,',$type='public'){

        $fileName=$title. '.' . $media->extension();
         $upload= $media->storeAS($path,$fileName,$type);
        return $upload;
    }
}