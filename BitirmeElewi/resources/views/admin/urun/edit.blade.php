@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{session('status')}}
                        </div>
                    @endif


                    <div class="card mt-1 mr-1">
                        <div class="card-header" style="background-color: purple; color: white;">
                            <h4 class="title" style="color: white; opacity: 0.8;">Ürün Düzenle</h4>
                            <p class="category">{{$data[0]['UrunAdi']}}</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.urun.edit.post',['id'=> $data[0]['UrunID']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="categoryLabel" name="KategoriID">
                                                @foreach($kategori as $key => $value)
                                                    <option value="{{$value['KategoriID']}}">{{$value['KategoriAdi']}}</option>

                                                @endforeach
                                            </select>
                                            <label for="categoryLabel">Kategori Seç</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="altcategoryLabel" name="AltKategoriID">
                                                @foreach($altkategori as $key => $value)
                                                    <option value="{{$value['AltKategoriID']}}">{{$value['AltKategoriAdi']}}</option>

                                                @endforeach
                                            </select>
                                            <label for="altcategoryLabel">Alt Kategori Seç</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" value="{{$data[0]['UrunKodu']}}" name="UrunKodu" class="form-control" placeholder="Urun" id="urunkoduLabel" >
                                            <label for="urunkoduLabel">Ürün Kodu</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" value="{{$data[0]['UrunAdi']}}" name="UrunAdi" class="form-control" placeholder="Urun" id="urunadiLabel" >
                                            <label for="urunadiLabel">Ürün Adı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" min="0.00" step="0.01" value="{{$data[0]['UrunFiyati']}}" name="UrunFiyati" class="form-control" placeholder="Urun" id="urunfiyatiLabel" >
                                            <label for="urunfiyatiLabel">Ürün Fiyatı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="UrunAciklama" value="{{$data[0]['UrunAciklama']}}" class="form-control" placeholder="Urun" id="urunaciklamaLabel" >
                                            <label for="urunaciklamaLabel">Ürün Açıklaması</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            @if($data[0]['Resim']!="")
                                                <img class="mt-2" src="{{asset($data[0]['Resim'])}}" style="width: 120px;height: 120px;">
                                            @endif
                                            <input type="file" name="Resim" class="form-control" placeholder="Urun" id="imageLabel" >
                                            <label for="imageLabel">Ürün Resmi</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Ürün Düzenle</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
