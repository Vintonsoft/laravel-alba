@extends('Site.layout')
@section('title', 'Ürünler')
@section('seo_keyword', 'demosite,demo, site, laravel')
@section('seo_description', 'Demosite ile kategori ürün ekleme, üyelik işlemleri yapılabilir')
@section('content')
    <div class="container mt-4">
        <!-- START -->
        <h5 class="text-muted mt-3"><span class="bg-primary-gradient text-white p-1 rounded">{{$category->title}} Ürünleri</span></h5>
        <div class="row">
            @if(count($data)>0)
                @foreach($data as $x => $key)
                    @if(isset($key->title))
                        <!-- Start -->
                            <div class="col-lg-3 col-6 mt-3 mb-3 rounded">
                                <div class="card border-0 overflow-hidden p-3 hover-shadow" id="card">
                                    <a href="/urun/{{$key->seo_url}}" title="{{$key->title}}" class="card border-0 text-decoration-none text-black" style="z-index: 1">
                                        <!-- Image Start-->
                                        <div class="align-self-center">
                                            <div class="ht-280 ht-250-sm p-2">
                                                <img class="h-100" src="{{$key->image!= null ? '/Picture/Product/'.$key->image : '/Picture/no-photo.jpg'}}" alt="">
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
            @else
                <div class="col-lg-12 text-center mt-2 p-3">
                    <i class="fa fa-minus-circle fa-2x text-danger"></i>
                    <p class="bg-grey text-muted mt-3 p-3 rounded">
                        Bu kategoride ürün bulunamadı !
                    </p>
                </div>
            @endif
        </div>
        <!-- STOP -->
    </div>
    <style>
        .text-truncate-2 {text-align: center; overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;}
    </style>
@endsection
