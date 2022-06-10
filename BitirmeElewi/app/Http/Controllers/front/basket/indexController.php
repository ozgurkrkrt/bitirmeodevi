<?php

namespace App\Http\Controllers\front\basket;

use App\Helper\sepetHelper;
use App\Http\Controllers\Controller;
use App\Models\Urun;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    public function index()
    {
        return view('front.basket.index');
    }
    public function add($id){
        $c = urun::where('UrunID', '=', $id)->count();
        if ($c != 0) {
            $w = urun::where('UrunID', '=', $id)->get();
            sepetHelper::add($id,$w[0]['UrunFiyati'],asset($w[0]['Resim']),$w[0]['UrunAdi']);
            return redirect()->back()->with('status','Sepete Eklendi');


        } else {
            return redirect()->route('index');
        }
    }
    public function remove($id)
    {
        sepetHelper::remove($id);
        return redirect()->back();
    }
}
