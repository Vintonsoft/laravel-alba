@extends('AdminPanel.layout')
@section('content')
    <div class="row mt-4 mb-2 me-2 ms-2 border align-items-center">
        <div class="col-lg-8 col-6">
            <h5 class="text-secondary mt-2">Ürün Kategorileri</h5>
        </div>
        <div class="col-lg-4 col-6 text-end">
            <a href="{{route('Categories.create')}}" class="bg-dark text-white p-2 rounded text-decoration-none"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </div>
    </div>
    <div class="ms-2 me-2 mt-2">
        <div class="input-group mb-2 align-items-center">
            <div class="clearfix"></div>
            <table class="table table-striped table-bordered table-responsive mt-2">
                <thead class="bg-white text-muted">
                <tr>
                    <th class="col-lg">Sıra</th>
                    <th class="col-lg-10">Kategori Adı</th>
                    <th class="col-lg-1 text-end">İşlem</th>
                </tr>
                </thead>
                <tbody class="bg-white">

                @foreach($data as $key)
                    <tr id="Categories-{{$key->id}}">
                        <td>{{$loop->iteration}}</td>
                        <td class="overflow-hidden text-nowrap">{{$key->title}}</td>
                        <td class="text-nowrap text-end">
                            <a href="{{route('Categories.edit',$key->id)}}" class="me-1"><i class="fa fa-edit text-success"></i></a>
                            <a href="javascript:void(0)" title="sil"><i id="Categories/{{$key->id}}" class="fa fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @if(empty($key))<div class="col-lg-12 text-center">Kayıt Bulunamadı</div> @endif
            <div class="col-12 mt-3">{{$data->links()}}</div>
        </div>
    </div>
@endsection
@section('css') @endsection
@section('js') @endsection
