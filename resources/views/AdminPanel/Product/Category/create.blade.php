@extends('AdminPanel.layout')
@section('content')
    <div class="row mt-4 mb-2 me-0 ms-0">
        <div class="col-lg-8 col-6">
            <h6 class="mb-0">Ürün Kategorileri / <small class="text-secondary">Yeni Ekle</small></h6>
            <span class="text-black-50 small">Yeni Veri Ekleyebilirsiniz</span>
        </div>
        <div class="col-lg-4 col-6 text-end mt-2">
            <a href="{{route('Categories.index')}}" class="bg-dark text-white p-2 rounded text-decoration-none"><i class="fa fa-list"></i> Kategorileri Listele</a>
        </div>
    </div>
    <div class="m-2 p-4 bg-white rounded shadow-sm">
        <div class="row mb-2 border-bottom border-light border-2">
            <div class="col-lg-4 h5">Yeni Kategori Ekle</div>
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
        <form action="{{route('Categories.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="tab-content pt-4">
                <div class="tab-pane fade show active" id="info" role="tabpanel">
                    <div class="input-group mb-3 align-items-center">
                        <label class="col-lg-3 col-4 align-self-center fw-bold d-none d-lg-block">Kategori Adı : </label>
                        <div class="col-lg-4 col-12">
                            <input type="text" class="form-control" name="title" maxlength="250" value="{{old('title')}}" placeholder="Kategori Adı" required>
                        </div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-lg-1 col-12 mt-3">Kaydet</button>
        </form>
    </div>
@endsection
@section('css') @endsection
@section('js') @endsection
