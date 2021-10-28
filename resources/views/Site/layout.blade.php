<!Doctype html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('seo_keyword')">
    <meta name="description" content="@yield('seo_description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/Styles/css/Style.css">
    <link rel="stylesheet" href="/Styles/icon/css/all.css">
    <link rel="stylesheet" href="/Styles/css/Desing.css">

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            window.addEventListener('scroll', function() {
                if (window.scrollY > 130) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
    </script>
</head>
<body class="bg-white">
<header>
    <div class="container">
        <div class="align-self-center small d-none d-lg-block">
            <ul class="nav navbar navbar-expand-lg justify-content-center fw-bold small pb-0">

            </ul>
        </div>
        <div class="row pb-2 mt-2 mt-lg-0">
            <div class="col-lg-4 text-center text-lg-start mb-lg-0">
                <a href="/" title="demosite"><img src="/Styles/img/logo.png" alt="demosite" height="50"></a>
            </div>

            <div class="col-lg-8 align-self-center">
                <div class="d-none d-lg-block">
                    <div class="row">
                        @if(Auth::check() && Auth::user()->role_ID==2)
                            <div class="col align-self-center text-end">
                                <a href="#" class="btn btn-sm btn-outline-primary p-2"><i class="fa fa-user text-primary"></i> {{Auth::user()->name.' '.Auth::user()->surname}}</a>
                                <a href="{{route('site.logout')}}" class="btn btn-sm btn-outline-danger p-2"><i class="fa fa-sign-out-alt text-danger"></i> Güvenli Çıkış</a>
                            </div>
                        @else
                            <div class="col align-self-center text-end">
                                <a href="{{route('Users.site.create')}}" title="Ücretsiz Kayıt" class="text-decoration-none btn btn-outline-primary"><i class="fas fa-user"></i> <b>Üye Ol</b></a>
                                <a href="{{route('Users.site.login')}}" title="Üyelik Girişi" class="text-decoration-none btn btn-outline-success">Giriş Yap</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" id="navbar_top">
        <div class="container">
            <button class="navbar-toggler btn-close-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Mobile User Link -->
            <div class="d-lg-none d-block">
                <a href="{{route('Users.site.login')}}" title=""><i class="far fa-user text-white fs-4"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav container text-center align-items-center">
                    <!-- Menu Start -->
                    <li class="col-lg col-12 text-start text-lg-center">
                        <a href="{{route('homepage')}}" title="Anasayfa" class="btn-primary nav-link {{ (request()-> is('/')) ? 'active' : '' }} text-white mt-3 mt-lg-0 p-2"><i class="fa fa-home"></i> Anasayfa</a>
                    </li>
                    @foreach($menus as $menu)
                        <li class="col-lg col-12 text-start text-lg-center">
                            <a class="btn-primary nav-link text-white p-2 {{ (request()-> is('kategori/'.$menu->seo_url)) ? 'active' : '' }}" href="/kategori/{{$menu->seo_url}}">{{$menu->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menu Stop -->
</header>
@yield('content')
<footer class="mt-5">
    <div class="bg-dark pt-4 pb-4">
        <div class="container">
            <div class="text-white text-center">
                <span><a href="" title="" target="_blank" class="text-primary text-decoration-none">Demosite</a> Tüm Hakları Saklıdır.</span>
            </div>
        </div>
    </div>
</footer>
<!-- MENÜ yandan açılma özelliği start -->
<script src="/VyStyles/js/popper.min.js"></script>
<script src="/VyStyles/js/bootstrap.min.js"></script>
<!-- MENÜ yandan açılma özelliği stop -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
