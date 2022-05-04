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
                            <h4 class="title" style="color: white; opacity: 0.8;">Ürün Ekle</h4>
                            <p class="category">Ürün Oluşturunuz</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{route('admin.urun.create.post')}}" method="POST">
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
                                            <input type="text" name="UrunKodu" class="form-control" placeholder="Urun" id="urunkoduLabel" >
                                            <label for="urunkoduLabel">Ürün Kodu</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="UrunAdi" class="form-control" placeholder="Urun" id="urunadiLabel" >
                                            <label for="urunadiLabel">Ürün Adı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" min="0.00" step="0.20" name="UrunFiyati" class="form-control" placeholder="Urun" id="urunfiyatiLabel" >
                                            <label for="urunfiyatiLabel">Ürün Fiyatı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="UrunAciklama" class="form-control" placeholder="Urun" id="urunaciklamaLabel" >
                                            <label for="urunaciklamaLabel">Ürün Açıklaması</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="Resim" class="form-control" placeholder="Kategori" id="imageLabel">
                                            <label for="imageLabel">Ürün Resmi</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Ürün Ekle</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
