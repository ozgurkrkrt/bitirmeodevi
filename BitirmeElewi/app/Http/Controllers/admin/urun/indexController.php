<?php

namespace App\Http\Controllers\admin\urun;
use App\Helper\imageUpload;
use App\Http\Controllers\Controller;
use App\Models\AltKategori;
use App\Models\Kategori;
use App\Models\Urun;
use Illuminate\Http\Request;
use File;

class indexController extends Controller
{
    public function index(){
        $data = Urun::paginate(10);
        return view('admin.urun.index',['data'=>$data]);
    }
    public function create(){
        $kategori = Kategori::all();
        $altkategori = AltKategori::all();
        return view('admin.urun.create',['kategori'=>$kategori,'altkategori'=>$altkategori]);
    }

    public function store(Request $request){
        $all = $request->except('_token');
        $all['Resim'] = imageUpload::singleUpload(rand(1,9000),'urun',$request->file('Resim'));
        $insert= Urun::create($all);
        if($insert){
            return redirect()->back()->with('status','Ürün Başarı İle Yüklendi');
        }else{
            return redirect()->back()->with('status','Ürün Yüklenemedi');
        }
    }
    public function edit($id){
        $kategori = Kategori::all();
        $altkategori = AltKategori::all();
        $data = Urun::where('UrunID','=',$id)->get();
        return view('admin.urun.edit',['data'=>$data,'kategori'=>$kategori,'altkategori'=>$altkategori]);
    }
    public function delete($id){
        $w = Urun::where('UrunID','=',$id)->get();
        File::delete('public/'.$w[0]['Resim']);
        $delete = Urun::where('UrunID','=',$id)->delete();
        if($delete){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token');
        $data = Urun::where('UrunID','=',$id)->get();
        $all['Resim'] = imageUpload::singleUploadUpdate(rand(1,900),'urun',$request->file('Resim'),$data,'Resim');

        $update = Urun::where('UrunID','=',$id)->update($all);
        if($update){
            return redirect()->back()->with('status','Ürün Düzenlendi');
        }
        else{
            return redirect()->back()->with('status','Ürün Düzenlenemedi');
        }
    }
}
