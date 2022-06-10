@extends('layouts.app')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">{{$data[0]['UrunAdi']}}</li>
                </ol>
            </div>
        </div>
    </div>
    @if(session("status"))
        <div class="breadcrumbs" style="margin-top: 5px;">
            <div class="container">
                <div class="breadcrumbs-main" style="padding: 10px;">
        {{session("status")}}
                </div>
            </div>
        </div>
        @endif
    <!--end-breadcrumbs-->
    <!--start-single-->
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-12 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-3 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]['Resim']))}}">
                                        <div class="thumb-image"> <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['Resim']))}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="{{asset('js/imagezoom.js')}}"></script>
                            <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                            <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function() {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-9 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{$data[0]['UrunAdi']}}</h2>


                                <h5 class="item_price">{{$data[0]['UrunFiyati']}} TL</h5>
                                <p>{{$data[0]['UrunAciklama']}}</p>
                                <ul class="tag-men">
                                    <li><span>Kategori</span>
                                        <span class="women1">: {{\App\Models\Kategori::getField($data[0]['KategoriID'],"KategoriAdi")}}</span></li>
                                    <li><span>Alt Kategori</span>
                                        <span class="women1">: {{\App\Models\AltKategori::getField($data[0]['AltKategoriID'],"AltKategoriAdi")}}</span></li>
                                </ul>
                                <a href="{{route('basket.add',['id'=>$data[0]['UrunID']])}}" class="add-cart item_add">SEPETE EKLE</a>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
