@extends('AdminPanel.layout')
@section('content')
    <div class="row mt-4 mb-2 me-0 ms-0">
        <div class="col-lg-8 col-6">
            <h6 class="mb-0">Ürünler / <small class="text-secondary">Yeni Ekle</small></h6>
            <span class="text-black-50 small">Yeni Veri Ekleyebilirsiniz</span>
        </div>
        <div class="col-lg-4 col-6 text-end mt-2">
            <a href="{{route('Products.index')}}" class="bg-dark text-white p-2 rounded text-decoration-none"><i class="fa fa-list"></i> Ürünleri Listele</a>
        </div>
    </div>
    <div class="m-2 p-4 bg-white rounded shadow-sm">
        <div class="row mb-2 border-bottom border-light border-2">
            <div class="col-lg-4 h5">Yeni Ürün Ekle</div>
            <div class="col-lg-8 text-end d-none d-lg-block">
                <span class="col-md-6 small text-end">
                    <i class="text-danger fw-bold"> * </i> Zorunlu Alan
                    <span class="bg-info text-white ps-1 pe-1 rounded ms-2">?</span> Bilgilendirme
                </span>
            </div>
        </div>
        <ul role="tablist" class="nav nav-pills rounded mb-3 border-bottom border-light border-2">
            <li class="nav-item me-1 bg-light border rounded"> <a data-toggle="pill" href="#info" class="nav-link active"> <i class="fas fa-info "></i> <span class="d-none d-lg-block float-end ps-lg-2"> Bilgiler</span></a> </li>
        </ul>
        <form action="{{route('Products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="tab-content pt-4">
                <div class="tab-pane fade show active" id="info" role="tabpanel">
                    <div class="input-group mb-3 align-items-center">
                        <label class="col-lg-3 col-4 align-self-center fw-bold d-none d-lg-block">Kategori : </label>
                        <div class="col-lg-3 col-11">
                            <select name="category" class="form-select" required>
                                <option value="">Kategori Seçiniz</option>
                                @foreach($data as $category)
                                    <option value="{{$category->id}}" {{old('category')==$category->id ? "selected" : ""}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                    </div>
                    <div class="input-group mb-3 align-items-center">
                        <label class="col-lg-3 col-4 align-self-center fw-bold d-none d-lg-block">Ürün Adı : </label>
                        <div class="col-lg-4 col-12">
                            <input type="text" class="form-control" name="title" maxlength="250" value="{{old('title')}}" placeholder="Başlık" required>
                        </div>
                        <span class="text-danger ps-2 d-none d-lg-block"> * </span>
                    </div>
                    <div class="input-group mb-3 align-items-center">
                        <label class="col-lg-3 col-4 align-self-center fw-bold d-none d-lg-block">İçerik : </label>
                        <div class="col-lg-6 col-12 overflow-hidden">
                            <textarea class="form-text" name="content" id="contents" placeholder="Açıklama">{{old('content')}}</textarea>
                            <style>.ck.ck-editor__main>.ck-editor__editable {min-height: 250px; max-height: 250px;}</style>
                            <script>ClassicEditor.create( document.querySelector( '#contents' ) )</script>
                        </div>
                    </div>
                    <div class="input-group mb-lg-3 mb-0 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold">Fiyat : </label>
                        <div class="col-lg-2 col-8 pt-2 pt-lg-0 pb-2 pb-lg-0" id="price"><input type="text" class="form-control" name="price" maxlength="50" placeholder="Fiyat" value="{{old('price')}}" required></div>
                        <div class="col-lg-1 col-3 ps-3" id="exchange">
                            <select name="exchange" class="form-select" required>
                                <option value="TL" {{old('exchange') == "TL" ? "selected" : ""}}selected>TL</option>
                                <option value="USD" {{old('exchange') == "USD" ? "selected" : ""}}>USD</option>
                                <option value="EURO" {{old('exchange') == "EURO" ? "selected" : ""}}>EURO</option>
                            </select>
                        </div>
                        <div class="btn btn-sm">
                            <span class="bg-info text-white ps-1 pe-1 rounded" data-bs-toggle="tooltip" data-bs-placement="right" title="Ondalık sayı belirtmek için vigül kullanmayınız. Nokta kullanınız. örn: 5210.50">?</span>
                        </div>
                    </div>
                    <div class="input-group mb-3 align-items-center">
                        <label class="col-lg-3 col-12 align-self-center fw-bold d-none d-lg-block">Ürün Resmi : </label>
                        <div class="col-lg-4 col-12">
                            <input class="form-control" name="image" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-lg-1 col-12 mt-3">Kaydet</button>
        </form>
    </div>
@endsection
@section('css') @endsection
@section('js') @endsection
