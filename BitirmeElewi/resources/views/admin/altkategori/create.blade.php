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
                            <h4 class="title" style="color: white; opacity: 0.8;">Alt Kategori Ekle</h4>
                            <p class="category">Kategori Oluşturunuz</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.altkategori.create.post')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="categoryLabel" name="KategoriID">
                                                @foreach($id as $key => $value)
                                                <option value="{{$value['KategoriID']}}">{{$value['KategoriAdi']}}</option>

                                                @endforeach
                                            </select>
                                            <label for="categoryLabel">Kategori Seç</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="AltKategoriAdi" class="form-control" placeholder="Kategori" id="altcategoryLabel" >
                                            <label for="altcategoryLabel">Alt Kategori Adı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Alt Kategori Ekle</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
