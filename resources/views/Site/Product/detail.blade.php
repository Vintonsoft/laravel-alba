@extends('Site.layout')
@section('title',$data->title)
@section('content')
    <div class="container text-secondary">
        <div class="ml-2 mt-3 justify-content-center">
            <div class="row">
                <div class="col-lg-12 mt-1 text-muted">
                    <a href="/" title="Alışveriş Sayfası" class="text-secondary text-decoration-none"><i class="fa fa-home"></i> Anasayfa</a> >
                    <a href="/kategori/{{$data->getCategories()->seo_url}}" title="{{$data->getCategories()->title}}" class="btn btn-sm btn-outline-dark"> {{$data->getCategories()->title}} </a>
                </div>
            </div>
        </div>
        <div class="bg-white mt-3">
            <div class="row">
                <div class="col-lg-6 pt-3 ps-1">
                    <div class="align-self-center border rounded">
                        <div class="m-2 ht-500 rounded overflow-hidden">
                            <div class="mt-3 border">
                                <img src="{{$data->image!= null ? '/Picture/Product/'.$data->image : '/Picture/no-photo.jpg'}}" alt="image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 p-4 bg-light pb-4">
                    <p class="fw-bold ht-60">{{$data->title}}</p>

                    <div class="ht-100 bg-secondary text-white rounded p-3">
                        <div class="row ms-0">
                            <div class="col-lg-8 col-8 align-self-center">
                                <div class="input-group">
                                    <div class="mt-2 p-1">
                                        <div class="h3 font-weight-bold mt-1" >{{number_format($data->price['price'], 2, ',', '.').' '.$data->price['exchange']}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4 small text-center align-self-center">Tavsiye Ürün</div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mt-4">
                        <div class="row align-items-center mt-lg-2 mt-3">
                            <div class="col-4">Kategori</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{$data->getCategories()->title}}</div>
                        </div>
                        <div class="row align-items-center mt-lg-2 mt-3">
                            <div class="col-4">Eklenme Tarihi</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{$data->created_at != null ? date('d-m-Y H:i:s', strtotime($data->created_at)) : 'Tarih Eklenmemiş'}}</div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-4">Fiyat</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{number_format($data->price['price'], 2, ',', '.').' '.$data->price['exchange']}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ÜRÜN AÇIKLAMA ALANI BAŞLA ------------------------------------------------------>
        <div class="mt-3 row">
            <ul role="tablist" class="nav nav-pills rounded pb-1">
                <li class="nav-item mr-1"> <a data-toggle="pill" href="#info" class="nav-link active "> <i class="fas fa-info "></i> Ürün Açıklaması </a> </li>
            </ul>
            <div class="tab-content p-3 bg-light border rounded">
                <div class="tab-pane fade show active" id="info" role="tabpanel">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
        <!-- ÜRÜN AÇIKLAMA ALANI BİTİŞ ------------------------------------------------------>
    </div>
@endsection
