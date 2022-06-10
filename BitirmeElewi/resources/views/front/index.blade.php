@extends('layouts.app')
@section('content')
    <div class="bnr" id="home">
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                @foreach(\App\Models\Slider::all() as $key => $value)
                <li>
                    <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt=""/>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--banner-ends-->
    <!--Slider-Starts-Here-->
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <div class="product">
        <div class="container">
            <div class="product-top">
                @foreach(\App\Models\Urun::all()->chunk(4) as $chunk)
                <div class="product-one">
                    @foreach($chunk as $key => $value)
                    <div class="col-md-3 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="{{route('urun.detay',['UrunAdi'=>$value['UrunAdi']])}}" style="width: 250px;height: 250px;margin: auto;" class="mask"><img class="img-responsive zoom-img" src="{{asset($value['Resim'])}}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>{{$value['UrunAdi']}}</h3>
                                <p>{{\App\Models\AltKategori::getField($value['AltKategoriID'],'AltKategoriAdi')}}</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">₺ {{$value['UrunFiyati']}}</span></h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
