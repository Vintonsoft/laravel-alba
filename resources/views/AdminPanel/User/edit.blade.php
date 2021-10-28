@extends('AdminPanel.layout')
@section('content')
    <div class="row mt-4 mb-2 me-0 ms-0">
        <div class="col-lg-8 col-6">
            <h6 class="mb-0">Üyeler / <small class="text-secondary">Düzenle</small></h6>
            <span class="text-black-50 small">Verileri DÜzenleyebilirsiniz</span>
        </div>
        <div class="col-lg-4 col-6 text-end mt-2">
            <a href="{{route('Users.index')}}" class="bg-dark text-white p-2 rounded text-decoration-none"><i class="fa fa-list"></i> Üyeleri Listele</a>
        </div>
    </div>
    <div class="m-2 p-4 bg-white rounded shadow-sm">
        <div class="row mb-2 border-bottom border-light border-2">
            <div class="col-lg-4 h5">Üye Düzenle</div>
            <div class="col-lg-8 text-end d-none d-lg-block">
                <span class="col-md-6 small text-end">
                    <i class="text-danger fw-bold"> * </i> Zorunlu Alan
                    <span class="bg-info text-white ps-1 pe-1 rounded ms-2">?</span> Bilgilendirme
                </span>
            </div>
        </div>
        <ul role="tablist" class="nav nav-pills rounded mb-3 border-bottom border-light border-2">
            <li class="nav-item me-1 bg-light border rounded"> <a data-toggle="pill" href="#info" class="nav-link active "> <i class="fas fa-info "></i> Bilgiler </a> </li>
        </ul>
        <form action="{{route('Users.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="tab-content pt-4">
                <div class="tab-pane fade show active" id="info" role="tabpanel">
                    <div class="input-group mb-0 mb-lg-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">Üye Grubu</label>
                        <div class="col-lg-3 col-12 pt-2 pt-lg-0 pb-2 pb-lg-0">
                            <select name="role" class="form-select text-secondary" required>
                                <option value="">Üye Grubu Seçiniz</option>
                                <option value="1" @if($data->role_ID == 1) selected @endif>Yönetici</option>
                                <option value="2" @if($data->role_ID == 2) selected @endif>Üye</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-0 mb-lg-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">Ad : </label>
                        <div class="col-lg-4 col-12 pt-2 pt-lg-0 pb-2 pb-lg-0"><input type="text" class="form-control" name="name" maxlength="100" value="{{$data->name}}" placeholder="Ad" required></div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                    </div>
                    <div class="input-group mb-0 mb-lg-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">Soyad : </label>
                        <div class="col-lg-4 col-12 pt-2 pt-lg-0 pb-2 pb-lg-0"><input type="text" class="form-control" name="surname" maxlength="100" value="{{$data->surname}}" placeholder="Soyad" required></div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                    </div>
                    <div class="input-group mb-0 mb-lg-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">E-Posta : </label>
                        <div class="col-lg-4 col-12 pt-2 pt-lg-0 pb-2 pb-lg-0"><input type="email" class="form-control" name="email" maxlength="225" value="{{base64_decode(base64_decode($data->email))}}" placeholder="E-Posta Adresi" required></div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                    </div>
                    <div class="input-group mb-0 mb-lg-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">Şifre : </label>
                        <div class="col-lg-4 col-12 pt-2 pt-lg-0 pb-2 pb-lg-0"><input type="password" class="form-control" name="password" minlength="6" maxlength="100" value="" placeholder="Şifre"></div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                        <div class="btn d-none d-lg-block">
                            <span class="bg-info text-white ps-1 pe-1 rounded" data-bs-toggle="tooltip" data-placement="right" title="Şifreniz en az 8 karakterden oluşmalıdır">?</span>
                        </div>
                    </div>
                    <div class="input-group mb-0 mb-lg-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">Telefon : </label>
                        <div class="col-lg-4 col-12 pt-2 pt-lg-0 pb-2 pb-lg-0"><input type="tel" class="form-control" name="phone" minlength="8" maxlength="20" value="{{$data->phone}}" placeholder="Telefon"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-lg-1 col-12 mt-3">Güncelle</button>
        </form>
    </div>
@endsection
@section('css') @endsection
@section('js') @endsection
