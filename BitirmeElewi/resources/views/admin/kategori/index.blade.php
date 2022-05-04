@extends('layouts.admin');
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2 pt-2">
                    <h3 class="content-header-title">Tablolar</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{asset('admin')}}">Ana Panel</a></li>
                                <li class="breadcrumb-item active">Tablo</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Basic Tables start -->
                <!-- Table head options start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Kategoriler</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Kategori Adı</th>
                                            <th scope="col">Düzenle</th>
                                            <th scope="col">Sil</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$value['KategoriID']}}</td>
                                            <td>{{$value['KategoriAdi']}}</td>
                                            <td><a href="{{route('admin.kategori.edit',['id'=>$value['KategoriID']])}}">Düzenle</a></td>
                                            <td><a href="{{route('admin.kategori.delete',['id'=>$value['KategoriID']])}}">Sil</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$data->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->

            </div>
        </div>
    </div>
@endsection
