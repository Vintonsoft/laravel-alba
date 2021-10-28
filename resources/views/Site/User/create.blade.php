@extends('Site.layout')
@section('title','Ücretsiz Üyelik')
@section('content')
    <section class="container mt-5">
        <div class="row justify-content-center h-100">
            <div class="col-lg-6 card mt-auto mb-auto">
                <div class="card-body">
                    <h4 class="text-black-50">Üye Kayıt</h4><br>
                    <form action="{{route('Users.site.store')}}" method="post">
                        @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $errors)
                                <div class="alert alert-danger">x {{$errors}}</div>
                            @endforeach
                        @elseif(session('error'))
                            <div class="alert alert-danger">x {{session('error')}}</div>
                        @elseif(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 mb-3"><input type="text" class="form-control bg-light" name="name" value="{{old('name')}}" placeholder="İsim" required></div>
                            <div class="col-lg-6 mb-3"><input type="text" class="form-control bg-light" name="surname" value="{{old('surname')}}" placeholder="Soyisim" required></div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-12"><input type="text" class="form-control bg-light" name="email" value="{{old('email')}}" placeholder="E-Posta Adresi" required></div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-12"><input type="password" class="form-control bg-light" name="password" value="" placeholder="Şifre" required></div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="col-12"><input type="password" class="form-control bg-light" name="password_confirmation" value="" placeholder="Şifre Tekrar" required></div>
                        </div>
                        <div class="input-group mb-0 mb-lg-3 align-items-center">
                            <div class="col-lg-12">
                                <button class="btn btn-primary">Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css') @endsection
@section('js') @endsection
