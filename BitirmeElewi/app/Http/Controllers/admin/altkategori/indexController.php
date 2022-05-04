<?php

namespace App\Http\Controllers\admin\altkategori;

use App\Http\Controllers\Controller;
use App\Models\AltKategori;
use App\Models\Kategori;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data = AltKategori::paginate(10);
        return view('admin.altkategori.index',['data'=>$data]);
    }
    public function create(){
        $id = Kategori::all();
        return view('admin.altkategori.create',['id'=>$id]);
    }
    public function store(Request $request){
        $all = $request->except('_token');
        $insert = AltKategori::create($all);
        if($insert){
            return redirect()->back()->with('status','Alt Kategori Başarı ile Eklendi');
        }
        else{
            return redirect()->back()->with('status','Alt Kategori Eklenemedi');
        }
    }
    public function edit($id){
        $Kid = Kategori::all();
        $data = AltKategori::where('AltKategoriID', '=',$id)->get();
        return view('admin.altkategori.edit',['data'=>$data,'Kid'=>$Kid]);
    }
    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token');
        $update = AltKategori::where('AltKategoriID','=',$id)->update($all);
        if($update){
            return redirect()->back()->with('status','Alt Kategori Düzenlendi');
        }
        else{
            return redirect()->back()->with('status','Alt Kategori Düzenlenemedi');
        }
    }

    public function delete($id){
        $delete = AltKategori::where('AltKategoriID','=',$id)->delete();
        if($delete){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
}
