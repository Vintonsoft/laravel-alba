@extends('AdminPanel.layout')
@section('content')
    <div class="row mt-4 mb-2 me-2 ms-2 border align-items-center">
        <div class="col-lg-8 col-6">
            <h5 class="text-secondary mt-2">Üye Listesi</h5>
        </div>
        <div class="col-lg-4 col-6 text-end">
            <a href="{{route('Users.create')}}" class="bg-dark text-white p-2 rounded text-decoration-none"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </div>
    </div>
    <div class="ms-2 me-2 mt-2">
        <div class="input-group mb-2 align-items-center">

            <div class="clearfix"></div>
            <div class="table table-responsive">
                <table class="table table-striped table-bordered mt-2">
                    <thead class="bg-white text-muted">
                    <tr>
                        <th>ID</th>
                        <th class="">Adı</th>
                        <th>Soyadı</th>
                        <th class="">E-Posta Adresi</th>
                        <th class="text-nowrap">Telefon</th>
                        <th class="text-nowrap text-center">Üye Grubu</th>
                        <th class="text-nowrap">Kayıt Tarihi</th>
                        <th class="text-end">İşlem</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">

                    @foreach($data as $key)
                        <tr id="Users-{{$key->id}}">
                            <td>{{$loop->iteration}}</td>
                            <td class="text-nowrap">{{$key->name}}</td>
                            <td>{{$key->surname}}</td>
                            <td class="overflow-hidden text-nowrap">{{base64_decode(base64_decode($key->email))}}</td>
                            <td class="text-nowrap">{{$key->phone}}</td>
                            <td class="text-center">
                                @if($key->role_ID==1)
                                    <span class="badge bg-danger p-1 rounded-pill text-white text-13">Yönetici</span>
                                @elseif($key->role_ID==2)
                                    <span class="badge bg-info p-1 rounded-pill text-white text-13">Üye</span>
                                @else
                                    <span class="badge bg-dark p-1 rounded-pill text-white text-13">X Bağlı Grup Yok</span>
                                @endif
                            </td>
                            <td class="text-nowrap">{{$key->created_at != null ? date('d-m-Y H:i:s', strtotime($key->created_at)) : 'Tarih Boş'}}</td>
                            <td class="text-nowrap text-end">
                                <a href="{{route('Users.edit',$key->id)}}" class="ms-2"><i class="fa fa-edit text-success"></i></a>
                                <a href="javascript:void(0)" title="sil" class="ms-2"><i id="Users/{{$key->id}}" class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                @if(empty($key))<div class="col-lg-12 text-center">Kayıt Bulunamadı</div> @endif
            </div>
            <div class="col-12 mt-3">{{$data->links()}}</div>
        </div>
    </div>

@endsection
@section('css') @endsection
@section('js') @endsection
