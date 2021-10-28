<!Doctype html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Yönetici Paneli</title>
    <meta name="keywords" content="yönetici paneli, v1 panel, demosite panel">
    <meta name="description" content="Yönetici Paneli V1.0 ile web sitenizi yönetmek hiç olmadığı kadar kolaydır.">
    <link rel="stylesheet" href="/Styles/css/Style.css">
    <style>
        html,body {height: 100%; }
    </style>
</head>
<body class="bg-light">
<div class="container h-100">
    <div class="row justify-content-center h-100">
        <div class="col-lg-6 col-md-8 col-xl-5 col-xxl-4 col-12 card mt-auto mb-auto px-5">
            <img src="Styles/img/logo.png" alt="logo" class="img-fluid mt-2">
            <div class="card-body" style="z-index: 2">
                <h4 class="text-muted text-center mt-1 mb-5">Site Kontrol Paneli</h4>
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">X {{session('error')}}</div>
                @endif
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">X {{$error}}</div>
                @endforeach
                <form action="{{route('Users.login')}}" method="post" class="mt-3">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control bg-light" placeholder="E-Posta Adresi" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" min="7" class="form-control bg-light" placeholder="Şifre" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="form-check me-1" name="remember" {{old('remember') ? 'checked' : ''}}> Beni Hatırla
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-primary form-control mt-2 mb-3" value="Giriş Yap">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
