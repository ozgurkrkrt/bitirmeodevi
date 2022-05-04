<?php
namespace App\Helper;
class mHelper{
    static function largeImage($image){
        $imageExplode = explode('/',$image);
        $filename = end($imageExplode);
        $key = key($imageExplode);
        unset($imageExplode[$key]);
        $implodeImage= implode('/',$imageExplode);
        return $implodeImage."/large/".$filename;

    }
}
