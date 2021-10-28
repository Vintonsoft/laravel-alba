@extends('Site.layout')
@section('title','Üye Girişi')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center h-100">
            <div class="col-lg-4 card mt-auto mb-auto" id="card">
                <div class="card-body">
                    <h4 class="text-muted text-center mt-3 mb-5">Giriş Yap</h4>
                    @if($errors->any())
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">x {{$errors}}</div>
                        @endforeach
                    @elseif(session('error'))
                        <div class="alert alert-danger">x {{session('error')}}</div>
                    @endif
                    <form action="" method="post" class="mt-3">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control bg-light" placeholder="E-Posta Adresi" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control bg-light" placeholder="Şifre" required>
                        </div>
                        <div class="input-group mb-3 text-muted">
                            <div class="col-lg-6">
                                <input type="checkbox" name="remember" {{old('remember') ? checked : ''}}> Beni Hatırla
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary form-control mt-2 mb-3" value="Giriş Yap">
                        </div>
                        <div class="form-group text-center">
                            <span class="font-weight-light small text-secondary">Üyelik kaydınız bulunmuyorsa hemen <a href="{{route('Users.site.create')}}" title="Ücretsiz Üyelik">Kayıt Ol</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css') @endsection
@section('js') @endsection
