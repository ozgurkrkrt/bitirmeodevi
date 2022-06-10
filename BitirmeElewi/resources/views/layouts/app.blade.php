<!DOCTYPE html>
<html>
<head>
    <title>Moda Dünyası</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="{{asset('js/simpleCart.min.js')}}"> </script>
    <link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    @auth
                        <div class="box">
                            <a href="" style="color:white;">{{\Illuminate\Support\Facades\Auth::user()->UyeAdi}}</a>
                        </div>
                        <div class="box">
                            <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}">Çıkış Yap</a>
                            <form action="{{route('logout')}}" id="logout-form" method="POST">
                                {{csrf_field()}}
                            </form>
                        </div>
                    @endauth
                    @guest
                    <div class="box">
                        <a href="{{route('login')}}" style="color:white;">Giriş Yap</a>
                    </div>
                    <div class="box1">
                        <a href="{{url('/register')}}" style="color:white;">Kayıt Ol</a>
                    </div>
                        @endguest
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <a href="{{route('basket.index')}}">
                        <div class="total">
                            <span >{{\App\Helper\sepetHelper::totalPrice()}} TL</span></div>
                        <img src="{{asset('images/cart-1.png')}}" alt="" />
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Sepeti Boşalt</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="{{route('index')}}"><h1>MODA DÜNYASI</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="grid"><a href="#">Erkek</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Alt Giyim</h4>
                                        <ul>
                                            <li><a href="products.html">Pantolon</a></li>
                                            <li><a href="products.html">Şort</a></li>
                                            <li><a href="products.html">Eşofman</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Üst Giyim</h4>
                                        <ul>
                                            <li><a href="products.html">Ceket</a></li>
                                            <li><a href="products.html">Gömlek</a></li>
                                            <li><a href="products.html">Tişort</a></li>
                                            <li><a href="products.html">Mont</a></li>
                                            <li><a href="products.html">Kaban</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Kadın</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Alt Giyim</h4>
                                        <ul>
                                            <li><a href="products.html">Pantolon</a></li>
                                            <li><a href="products.html">Şort</a></li>
                                            <li><a href="products.html">Eşofman</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Üst Giyim</h4>
                                        <ul>
                                            <li><a href="products.html">Ceket</a></li>
                                            <li><a href="products.html">Gömlek</a></li>
                                            <li><a href="products.html">Tişort</a></li>
                                            <li><a href="products.html">Mont</a></li>
                                            <li><a href="products.html">Kaban</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="grid"><a href="#">Unisex</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Alt Giyim</h4>
                                        <ul>
                                            <li><a href="products.html">Pantolon</a></li>
                                            <li><a href="products.html">Şort</a></li>
                                            <li><a href="products.html">Eşofman</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Üst Giyim</h4>
                                        <ul>
                                            <li><a href="products.html">Ceket</a></li>
                                            <li><a href="products.html">Gömlek</a></li>
                                            <li><a href="products.html">Tişort</a></li>
                                            <li><a href="products.html">Mont</a></li>
                                            <li><a href="products.html">Kaban</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="typo.html">Hakkımızda</a>
                        </li>
                        <li class="grid"><a href="contact.html">İletişim</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <input type="text" value="Arama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->

@yield('content')
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Bizi Takip Edin</h3>
                <ul>
                    <li><a href="https://www.instagram.com/"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="https://twitter.com/home?lang=tr"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="https://myaccount.google.com/profile"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Bilgi</h3>
                <ul>
                    <li><a href="#"><p>Biz Kimiz</p></a></li>
                    <li><a href="#"><p>Yeni Ürünler</p></a></li>
                    <li><a href="#"><p>Mağazamız</p></a></li>
                    <li><a href="contact.html"><p>Bizimle İletişime Geçin</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Hakkımızda</h3>
                <ul>
                    <li><a href="account.html"><p>Moda Dünyası</p></a></li>
                    <li><a href="#"><p>Çalışanlarımız</p></a></li>
                    <li><a href="#"><p>Kariyer</p></a></li>
                    <li><a href="#"><p>Adres</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Mağaza Bilgisi</h3>
                <h4>Moda Dünyası,
                    <span>Özgüncan Karakurt,</span>
                    Toroslar/Mersin.</h4>
                <h5>+905468351946</h5>
                <p><a href="17155058@mersin.edu.com">17155058@mersin.edu.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Email Giriniz" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Giriniz';}">
                    <input type="submit" value="Abone Ol">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2022 Tüm Hakları Özgüncan Karakurt Tarafından Saklıdır | Tasarım  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
</html>

