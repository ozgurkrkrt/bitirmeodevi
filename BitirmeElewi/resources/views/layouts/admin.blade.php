<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="apple-touch-icon" href="{{asset('admin_css/assets/images/ico/apple-icon-120.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_css/assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_css/assets/vendors/css/charts/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_css/assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_css/assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_css/assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_css/assets/css/pages/dashboard-ecommerce.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<nav>

</nav>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('admin_css/assets/images/backgrounds/02.jpg')}}">

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="{{route('admin.kategori.create')}}"><i class="ft-log-in"></i><span class="menu-title" data-i18n="">Kategori Ekle</span></a></li>
            <li class="nav-item"><a href="{{route('admin.altkategori.create')}}"><i class="ft-log-in"></i><span class="menu-title" data-i18n="">Alt Kategori Ekle</span></a></li>
            <li class="nav-item"><a href="{{route('admin.urun.create')}}"><i class="ft-log-in"></i><span class="menu-title" data-i18n="">Ürün Ekle</span></a></li>
            <li class="nav-item"><a href="{{route('admin.slider.create')}}"><i class="ft-log-in"></i><span class="menu-title" data-i18n="">Slider Ekle</span></a></li>
            <li class=" nav-item"><a href="{{route('admin.kategori.index')}}"><i class="ft-list"></i><span class="menu-title" data-i18n="">Kategori Tablosu</span></a></li>
            <li class=" nav-item"><a href="{{route('admin.altkategori.index')}}"><i class="ft-list"></i><span class="menu-title" data-i18n="">Alt Kategori Tablosu</span></a></li>
            <li class=" nav-item"><a href="{{route('admin.urun.index')}}"><i class="ft-list"></i><span class="menu-title" data-i18n="">Ürün Tablosu</span></a></li>
            <li class=" nav-item"><a href="{{route('admin.slider.index')}}"><i class="ft-list"></i><span class="menu-title" data-i18n="">Slider Tablosu</span></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>

    @yield('content')
        <!-- BEGIN VENDOR JS-->
        <script src="{{asset('admin_css/assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{asset('admin_css/assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN CHAMELEON  JS-->
        <script src="{{asset('admin_css/assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin_css/assets/js/core/app-lite.js')}}" type="text/javascript"></script>
        <!-- END CHAMELEON  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{asset('admin_css/assets/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

