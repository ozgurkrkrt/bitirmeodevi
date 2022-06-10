<?php

namespace App\Helper;

use Illuminate\Support\Facades\Session;

class sepetHelper
{
    static function add($id,$fiyat,$image,$name)
    {
        $sepet = Session::get('basket');
        $array = [
            'id'=>$id,
            'name'=>$name,
            'image'=>$image,
            'fiyat'=>$fiyat
        ];
        Session::put('basket.'.rand(1,90000),$array);
    }
    static function remove($id)
    {
        Session::forget('basket.'.$id);
    }

    static function countData()
    {
        return count(array('basket'));  //bu kısımda sepetteki sepetimdeki ürün adetini hesaplattık//
    }
    static function allList()
    {
        $x = Session::get('basket');

        return $x;
    }

    static function totalPrice()  //toplam fiyatı bulma
    {
        $data = self::allList();
        return collect($data)->sum('UrunFiyati');
    }
}
