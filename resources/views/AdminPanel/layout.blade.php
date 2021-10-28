<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Vinton Yazılım Yönetici Paneli</title>
    <meta name="keywords" content="vinton, vintonyazılım, vinton yazilim, vinton v1.0, vinton yönetici paneli, vinton panel">
    <meta name="description" content="Vinton Yazılım Multiple Yönetici Paneli V1.0 ile web sitenizi yönetmek hiç olmadığı kadar kolaydır.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/Styles/css/Style.css">
    <link rel="stylesheet" href="/Styles/icon/css/all.css">
    <script src="/Styles/js/jquery.js" type="text/javascript"></script>
    <!-- Alertify Uyarıları start-->
    <link rel="stylesheet" href="/Styles/css/alertify.min.css"/>
    <link rel="stylesheet" href="/Styles/css/default.min.css"/>
    <script src="/Styles/js/alertify.min.js"></script>
    <!-- Alertify Uyarıları stop-->
    <!-- Editör start -->
    <script src="/Styles/js/ckeditor.js"></script>
    <!-- Editör stop -->
    <style>
        @media (max-width:992px){.min-vh-100{min-height:auto!important}}
        .resim-ac img{max-width:200px; margin-left: 20px; position: absolute; background-color: #fff; border: 1px #4a5568 solid; display:none;}
        .resim-ac:hover img {
            display:block;
            transition-property: all;
            transition-duration: 0.5ms;
            transition-timing-function: cubic-bezier(0, 2, 0.5, 2);
        }
    </style>
</head>
<body class="bg-light small">
<header class="bg-dark fixed-top">
    <div class="row me-0 align-items-center">
        <div class="col-lg-2 col-4 mt-1 text-center">
            <img src="/Styles/img/logo.png" alt="" class="img-fluid" style="height: 50px">
        </div>
        <div class="col-lg-10 col-8 text-end">
            <span class="dropdown">
                <a class="btn btn-sm btn-primary bg-gradient me-lg-2 me-1" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-plus"></i>
                </a>
                <div class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuButton">
                    <a href="{{route('Products.create')}}" title="Yeni Ürün Ekle" class="dropdown-item-text text-white text-decoration-none"><i class="fa fa-plus mr-2"></i> Ürün Ekle</a>
                    <a href="{{route('Users.create')}}" title="Yeni Üye Ekle" class="dropdown-item-text text-white text-decoration-none"><i class="fa fa-plus mr-2"></i> Üye Ekle</a>
                </div>
            </span>
            @if(Auth::check() && Auth::user()->role_ID==1)
                <a href="{{route('Users.edit',Auth::id())}}" title="Düzenle" class="btn btn-sm btn-success bg-gradient me-lg-2 me-1"><i class="fa fa-user-edit"></i> </a>
                <a href="{{route('Users.exit')}}" title="Güvenli Çıkış" class="btn btn-sm btn-danger bg-gradient"><i class="fa fa-sign-out-alt"></i> </a>
            @endif
        </div>
    </div>
</header>
<div class="text-secondary mt-4">
    <div class="col-lg-2 col-12 bg-dark text-white min-vh-100 position-fixed navbar-nav-scroll" style="z-index: 99">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler btn-close-white mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Menü
            </button>
            <div class="collapse navbar-collapse pt-3" id="navbarNavDropdown">
                <ul class="navbar-nav container flex-column fs-6 p-3">
                    <div class="row mt-2 p-1">
                        <a href="{{route('Dashboard.index')}}" title="Anasayfa" class="btn border-0 bg-gradient text-white">
                            <span class="float-start"><i class="fa fa-home me-2"></i> ANASAYFA</span>
                        </a>
                    </div>
                    <div class="p-1">
                        <!-- Product Menu Start-->
                        <div id="AProduct" class="row">
                            <div class="btn border-0 w-100 text-white bg-gradient" data-bs-toggle="collapse" data-bs-target="#BProduct" aria-expanded="true" aria-controls="BProduct">
                                <span class="float-start"><i class="far fa-list-alt me-2"></i> ÜRÜNLER</span>
                                <span class="float-end"><i class="fa fa-angle-right iconSize" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div id="BProduct" class="collapse opencolllapse" aria-labelledby="AProduct">
                            <div class="bg-secondary pt-1 pb-1 text-white">
                                <a href="{{route('Products.index')}}" title="" class="text-white text-decoration-none">
                                    <li class="nav nav-item border-bottom border-dark p-2">Ürünler</li>
                                </a>
                                <a href="{{route('Products.create')}}" title="Ürünler" class="text-white text-decoration-none">
                                    <li class="nav nav-item border-bottom border-dark p-2">Yeni Ürün Ekle</li>
                                </a>
                                <a href="{{route('Categories.index')}}" title="Kategoriler" class="text-white text-decoration-none">
                                    <li class="nav nav-item border-dark p-2">Kategoriler</li>
                                </a>
                            </div>
                        </div>
                        <!-- Product Menu Finish-->
                    </div>

                    <div class="row p-1">
                        <a href="{{route('Users.index')}}" title="Üye Listesi" class="btn border-0 w-100 text-white bg-gradient">
                            <span class="float-start"><i class="fa fa-users me-2"></i> ÜYELER</span>
                        </a>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-lg-10 col-12 float-end mt-lg-0 mt-5">
        <section class="text-secondary mt-5">
            @yield('content')
        </section>
    </div>
</div>
<!-- UYARI ALANLARI START-->
@if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
@endif
@if(session()->has('error'))
    <script>alertify.error('{{session('error')}}')</script>
@endif

@foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
@endforeach
<!-- UYARI ALANLARI STOP-->
<script>
    $(document).ready(function() {
        $("body").tooltip({ selector: '[data-bs-toggle=tooltip]' });
    });

    $('.opencolllapse').on('hidden.bs.collapse', function(){
        $(this).parent().find(".fa-angle-down").removeClass("fa-angle-up").addClass("fa-angle-right");
    }).on('show.bs.collapse', function(){
        $(this).parent().find(".fa-angle-right").removeClass("fa-angle-right").addClass("fa-angle-down");
    });
</script>
<script type="text/javascript" src="/Styles/js/ajaxcode.js"></script>
<!-- Sepet Aşağıya kaydırma start -->
<script src="/Styles/js/bootstrap.min.js"></script>
<!-- Sepet Aşağıya kaydırma stop -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="/Styles/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
