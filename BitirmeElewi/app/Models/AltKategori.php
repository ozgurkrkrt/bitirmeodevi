<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltKategori extends Model
{
    protected $guarded = [];
    static function getField($id,$field)
    {
        $c = AltKategori::where('AltKategoriID', '=', $id)->count();

        if ($c != 0) {
            $c = AltKategori::where('AltKategoriID', '=', $id)->get();
            return $c[0][$field];
        } else {
            return "Silinmiş Alt Kategori";
        }
    }
}
