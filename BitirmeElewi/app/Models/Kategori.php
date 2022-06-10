<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $guarded = [];
    static function getField($id,$field){
        $c = Kategori::where('KategoriID','=',$id)->count();
        if($c!=0){
            $w = Kategori::where('KategoriID','=',$id)->get();
            return $w[0][$field];
        }else{
            return "Silinmiş Kategori";
        }
    }
}
