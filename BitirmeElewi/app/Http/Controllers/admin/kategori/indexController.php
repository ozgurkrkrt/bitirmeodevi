<?php

namespace App\Http\Controllers\admin\kategori;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data = Kategori::paginate(10);
        return view('admin.kategori.index',['data'=>$data]);
    }
    public function create(){
        return view('admin.kategori.create');
    }
    public function store(Request $request){
        $all = $request->except('_token');
        $insert = Kategori::create($all);
        if($insert){
            return redirect()->back()->with('status','Kategori Başarı ile Eklendi');
        }
        else{
            return redirect()->back()->with('status','Kategori Eklenemedi');
        }

    }

    public function edit($id){
        $data = Kategori::where('KategoriID', '=',$id)->get();
        return view('admin.kategori.edit',['data'=>$data]);
    }
    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token');
        $update = Kategori::where('KategoriID','=',$id)->update($all);
        if($update){
            return redirect()->back()->with('status','Kategori Düzenlendi');
        }
        else{
            return redirect()->back()->with('status','Kategori Düzenlenemedi');
        }
    }

    public function delete($id){
        $delete = Kategori::where('KategoriID','=',$id)->delete();
        if($delete){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    public function select(){
        $id = Kategori::all();
        return $id['KategoriID'];
    }
}
