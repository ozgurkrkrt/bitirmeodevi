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
                            <h4 class="title" style="color: white; opacity: 0.8;">Kategori Düzenle</h4>
                            <p class="category">{{$data[0]['KategoriAdi']}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.kategori.edit.post',['id'=>$data[0]['KategoriID']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" value="{{$data[0]['KategoriAdi']}}" name="KategoriAdi" class="form-control" placeholder="Kategori" id="categoryLabel" >
                                            <label for="categoryLabel">Kategori Adı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Kategori Düzenle</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
