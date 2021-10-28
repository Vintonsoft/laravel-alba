<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SiteUserController extends Controller
{
    //Üye Kayıt Sayfası
    public function create()
    {
        return view('Site.User.create');
    }

    //Üye Kayıt Kontrolleri
    public function store(Request $request)
    {
        //Gelen request değerini şifreleyip o şekilde filtreden geçiriyoruz
        $request['email_c'] = base64_encode(base64_encode($request->email));
        //Güvenlik Kontrolleri
        $request->validate([
            'name'      => 'bail|required|max:100',
            'surname'   => 'bail|required|max:100',
            'email'     => 'bail|required|email:rfc,dns',   //Bu alan request ile gelen veriyi şifrelemeden kontrol ediyor. Zorunlu Alan | Mail uzantısı geçerli bir dns olmak zorunda
            'email_c'   => 'bail|unique:users,email',       //Bu alan şifrelenmiş olan veriyi kontrol ediyor. EMail daha önce veritabanına kayıt edilmiş mi ?
            'password'  => 'bail|required|min:8|confirmed', //Zorunlu Alan | En az 8 karakter | Şifre doğrulama
        ],
            [
                'name.required'         => 'İsim Alanı Boş Bırakılamaz!',
                'surname.required'      => 'Soyisim Alanı Boş Bırakılamaz!',
                'email.required'        => 'E-Posta Alanı Boş Bırakılamaz!',
                'email.email'           => 'Geçerli E-Posta adresi giriniz',
                'email_c.unique'        => 'Bu E-Posta Adresi Kayıtlıdır',
                'password.required'     => 'Şifre Alanı Boş Bırakılamaz!',
                'password.min'          => 'Şifreniz en az 8 karakter olmalıdır',
                'password.confirmed'    => 'Şifreleriniz birbiri ile uyuşmuyor'
            ]);

        $data = new User;
        $data -> name                   =       Str::title($request->input('name')); //Görsellik için İlk Harf Büyük İsim
        $data -> surname                =       Str::title($request->input('surname')); //Görsellik için İlk harf Büyük Soyisim
        $data -> email                  =       base64_encode(base64_encode($request->input('email')));  //Email, güvenlik için şifrelenerek kayıt ediliyor
        $data -> password               =       bcrypt($request->password); //Şifre
        $data -> role_ID                =       2; //Yetki 1 Admin, Yetki 2 user

        if($data->save())
        {
            return back()->with('success','Kayıt Başarılıdır. Giriş Yapabilirsiniz');
        }
        return back()->with('error','Hata Meydana Geldi');
    }

    //Üye Giriş Sayfası
    public function login()
    {
        return view('Site.User.login');
    }

    //Üye Giriş Kontrolü
    public function auth(Request $request)
    {
        if ($request->hasHeader('referer')) { //Eğer referans URL mevcut ise işleme başla. Böylece uzaktan erişimi kısmen zorlaştırırız
            //Güvenlik Kontrolleri
            $request->validate([
                'email' => 'bail|required|email:rfc,dns',
                'password' => 'required|min:8',
            ],
                [
                    'email.required' => 'E-Posta Alanı Boş Bırakılamaz!',
                    'password.required' => 'Şifre Alanı Boş Bırakılamaz!',
                    'email.email' => 'Geçerli E-Posta adresi giriniz',
                    'password.min' => 'Şifreniz en az 8 karakter olmalıdır'
                ]);

            $data = [
                'email' => base64_encode(base64_encode($request->input('email'))),
                'password' => $request->input('password'),
                'role_ID' => 2
            ];
            if (Auth::attempt($data, ($request->remember == 'on') ? true : false)) {
                return redirect(route('homepage'));
            } else {
                return back()->with('error', 'Bilgiler Hatalıdır');
            }
        }
        abort(404);
    }

    /**
     * ÜYE OTURUMUNU SONLANDIR
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->intended(route('homepage'));
    }
}
