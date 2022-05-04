<?php

namespace App\Http\Controllers\front\urun;

use App\Http\Controllers\Controller;
use App\Models\Urun;

class indexController extends Controller
{
    public function index($UrunAdi){
        $c = Urun::where('UrunAdi','=',$UrunAdi)-count();
        if($c!=0){
            $w = Urun::where('UrunAdi','=',$UrunAdi)->get();
            return view('front.urun,index',['data'=>$w]);
        }else{
            return redirect('/');
        }
    }
}
