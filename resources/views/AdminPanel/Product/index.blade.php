@extends('AdminPanel.layout')
@section('content')
    <div class="row mt-4 mb-2 me-2 ms-2 border align-items-center">
        <div class="col-lg-8 col-6">
            <h5 class="text-secondary mt-2">Ürünler</h5>
        </div>
        <div class="col-lg-4 col-6 text-end">
            <a href="{{route('Products.create')}}" class="bg-dark text-white p-2 rounded text-decoration-none"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </div>
    </div>
    <div class="ms-2 me-2 mt-2">
        <div class="input-group mb-2 align-items-center">
            <div class="col-lg-12 text-end ps-0 d-none d-lg-block">
                <span class="col-md-6 small text-end">
                    <i class="fa fa-image text-danger ms-lg-2"></i> Resim Var
                    <i class="fa fa-image text-black ms-lg-2"></i> Resim Yok
                </span>
            </div>
            <div class="clearfix"></div>
            <div class="table table-responsive">
                <table class="table table-striped table-bordered mt-2">
                    <thead class="bg-white text-muted">
                    <tr>
                        <th class=""><i class="fa fa-images"></i> </th>
                        <th class="col-lg-3">Ürün Adı</th>
                        <th class="">Kategori</th>
                        <th class="text-nowrap">Ürün Fiyat</th>
                        <th class="text-center">İşlem</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white" id="sortable">

                    @foreach($data as $key)
                        <tr id="Products-{{$key->id}}">
                            <td>
                                <div class="resim-ac">
                                    @if($key->image!=NULL)
                                        <i class="fa fa-image text-danger"></i>
                                        <img src="/Picture/Product/{{$key->image}}" height="100" alt="{{$key->title}}"/>
                                    @else
                                        <i class="fa fa-image text-black"></i>
                                        <img src="/Picture/no-photo.jpg" height="50" alt="Resim Bulunamadı" />
                                    @endif
                                </div>
                            </td>
                            <td class="">
                                <div class="overflow-hidden text-nowrap" style="width: 400px; text-overflow: ellipsis;">
                                    <a href="{{route('Products.edit',$key->id)}}" class="text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{$key->title}}" target="_blank">{{$key->title}}</a>

                                </div>                        </td>
                            <td class="overflow-hidden text-nowrap d-block" style="text-overflow: ellipsis;">{{$key->getCategories()->title}}</td>
                            <td class="text-nowrap text-end">{{isset($key['price']['price']) ? number_format($key->price['price'], 2, ',', '.') : ""}} {{isset($key['price']['exchange']) ? $key['price']['exchange'] : ""}}</td>

                            <td class="text-nowrap text-end">
                                <a href="{{route('Products.edit',$key->id)}}" class="me-1"><i class="fa fa-edit text-success"></i></a>
                                <a href="javascript:void(0)" title="sil"><i id="Products/{{$key->id}}" class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @if(empty($key))<div class="col-lg-12 text-center">Kayıt Bulunamadı</div> @endif
            <div class="col-12 mt-3">{{$data->links()}}</div>
        </div>
    </div>
@endsection
@section('css') @endsection
@section('js') @endsection
