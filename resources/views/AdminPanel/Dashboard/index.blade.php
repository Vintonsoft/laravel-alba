@extends('AdminPanel.layout')
@section('content')
    <div class="container-fluid">
        <div class="row col-lg-12 mt-5 ms-0">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="card bg-success bg-gradient text-white overflow-hidden shadow">
                    <div class="ps-3 pt-2 pb-3">ÜRÜNLER</div>
                    <div class="ps-3 row">
                        <div class="col-9"><h4 class="mb-0">{{$data['totalProduct']}}</h4><small class="text-white-50">Toplam Ürün Sayısı</small></div>
                        <div class="col-3"><i class="far fa-check-square fa-2x text-white-50"></i></div>
                    </div>
                    <div><img src="/Styles/img/stat.png"> </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="card bg-primary bg-gradient text-white overflow-hidden shadow">
                    <div class="ps-3 pt-2 pb-3">ÜYELER</div>
                    <div class="ps-3 row">
                        <div class="col-9"><h4 class="mb-0">{{$data['users']->count()}}</h4><small class="text-white-50">Toplam Üye Sayısı</small></div>
                        <div class="col-3"><i class="far fa-user fa-2x text-white-50"></i></div>
                    </div>
                    <div><img src="/Styles/img/stat.png"> </div>
                </div>
            </div>
        </div>
        <section class="text-secondary">
            <div class="row mt-4 mb-2 me-2 ms-2 border align-items-center">
                <div class="col-lg-6 col-6">
                    <h5 class="text-secondary mt-2">Son 10 Üye</h5>
                </div>
            </div>
            <div class="ms-2 me-2 mt-2">
                <div class="input-group mb-2 align-items-center">
                    <div class="table table-responsive">
                        <table class="table table-striped table-bordered mt-2">
                            <thead class="bg-white text-muted">
                            <tr>
                                <th class="">ID</th>
                                <th class="">Adı Soyadı</th>
                                <th class="text-nowrap">E-Posta Adresi</th>
                                <th class="text-nowrap">Telefon</th>
                                <th class="text-nowrap text-end">Kayıt Tarihi</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white" id="sortable">
                            @foreach($data['users']->slice(0,10) as $users)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td class="text-nowrap">
                                        <a href="{{route('Users.edit',$users->id)}}" target="_blank">{{$users->name.' '.$users->surname}}</a>
                                    </td>
                                    <td class="text-nowrap">{{base64_decode(base64_decode($users->email))}}</td>
                                    <td class="text-nowrap">{{$users->phone}}</td>
                                    <td class="text-nowrap text-end">{{$users->created_at != null ? date('d-m-Y H:i:s', strtotime($users->created_at)) : 'Tarih Boş'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('css') @endsection
@section('js') @endsection
