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
                            <h4 class="title" style="color: white; opacity: 0.8;">Kategori Ekle</h4>
                            <p class="category">Kategori Oluşturunuz</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.kategori.create.post')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="KategoriAdi" class="form-control" placeholder="Kategori" id="categoryLabel" >
                                            <label for="categoryLabel">Kategori Adı</label>
                                            <span class="metarial-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Kategori Ekle</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
