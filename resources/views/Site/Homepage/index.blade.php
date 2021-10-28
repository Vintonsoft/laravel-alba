@extends('Site.layout')
@section('title', 'Anasayfa')
@section('seo_keyword', 'demosite,demo, site, laravel')
@section('seo_description', 'Demosite ile kategori ürün ekleme, üyelik işlemleri yapılabilir')
@section('content')
    <div class="container mt-4">
        <!-- START -->
        <h5 class="text-muted mt-3"><span class="bg-primary-gradient text-white p-1 rounded">Vitrin Ürünleri</span></h5>
        <div class="row">
        @foreach($data->slice(0,8) as $x => $key)
            @if(isset($key->title))
                <!-- Start -->
                    <div class="col-lg-3 col-6 mt-3 mb-3 rounded">
                        <div class="card border-0 overflow-hidden p-3 hover-shadow" id="card">
                            <a href="/urun/{{$key->seo_url}}" title="{{$key->title}}" class="card border-0 text-decoration-none text-black" style="z-index: 1">
                                <!-- Image Start-->
                                <div class="align-self-center">
                                    <div class="ht-280 ht-250-sm p-2">
                                        <img class="h-100" src="{{$key->image!= null ? '/Picture/Product/'.$key->image : '/VyPicture/no-photo.jpg'}}" alt="">
                                    </div>
                                </div>
                                <!-- Image Stop-->
                                <!-- Title Start-->
                                <div class="d-flex text-dark ht-40 mt-2 mb-2 justify-content-center">
                                    <div class="align-self-center text-secondary text-truncate-2">
                                        {{$key->title}}
                                    </div>
                                </div>
                                <!-- Title Stop-->
                                <!-- Price Start-->
                                <div class="ht-50">
                                    <div class="input-group justify-content-center">
                                        <div class="mt-2 p-1">
                                            <div class="h5 text-primary" >{{number_format($key->price['price'], 2, ',', '.').' '.$key->price['exchange']}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Price Stop-->
                        </div>
                    </div>
                    <!-- Stop -->
                @endif
            @endforeach
        </div>
        <!-- STOP -->
    </div>
    <style>
        .text-truncate-2 {text-align: center; overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;}
    </style>
    <!-- MENÜ yandan açılma özelliği start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- MENÜ yandan açılma özelliği stop -->
@endsection
