<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $data = User::orderBy('id','desc')->paginate(10);
        return view('AdminPanel.User.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasHeader('referer')) { //Eğer referans URL mevcut ise işleme başla.
            //Gelen request değerini şifreleyip o şekilde filtreden geçiriyoruz
            $request['email_c'] = base64_encode(base64_encode($request->email));
            //Güvenlik Kontrolleri
            $this->validate($request, [
                'role'      => 'required',
                'name'      => 'required',
                'surname'   => 'required',
                'email'     => 'required|email:rfc,dns',
                'email_c'   => 'bail|unique:users,email',       //Bu alan şifrelenmiş olan veriyi kontrol ediyor. EMail daha önce veritabanına kayıt edilmiş mi ?
                'password'  => 'required|min:8',
                'phone'     => 'required',
            ],
                [
                    'role.required'         => 'Üye Grubu Boş Bırakılamaz',
                    'name.required'         => 'İsim Alanı Boş Bırakılamaz!',
                    'surname.required'      => 'Soyisim Alanı Boş Bırakılamaz!',
                    'email.required'        => 'E-Posta Alanı Boş Bırakılamaz!',
                    'email.email'           => 'Geçerli E-Posta adresi giriniz',
                    'email_c.unique'        => 'Bu E-Posta Adresi Kayıtlıdır',
                    'password.required'     => 'Şifre Alanı Boş Bırakılamaz!',
                    'password.min'          => 'Şifreniz en az 8 karakter olmalıdır',
                    'phone.required'        => 'Telefon Alanı Boş Bırakılamaz!'
                ]);

            $data = new User;
            $data->role_ID          = $request->input('role');
            $data->name             = Str::title($request->input('name'));
            $data->surname          = Str::title($request->input('surname'));
            $data->email            = base64_encode(base64_encode($request->input('email')));
            $data->password         = bcrypt($request->input('password'));
            $data->phone            = $request->input('phone');

            if ($data->save()) {
                return back()->with('success', 'Kayıt Başarılıdır');
            }
            return back()->with('error', 'Hata Meydana Geldi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        if($data) {
            return view('AdminPanel.User.edit')->with('data', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasHeader('referer')) { //Eğer referans URL mevcut ise işleme başla.
            //Gelen request değerini şifreleyip o şekilde filtreden geçiriyoruz
            $request['email_c'] = base64_encode(base64_encode($request->email));
            //Güvenlik Kontrolleri
            $this->validate($request, [
                'role'      => 'required',
                'name'      => 'required',
                'surname'   => 'required',
                'email'     => 'required|email:rfc,dns',
                'email_c'   => 'bail|unique:users,email,'.$id,       //Bu alan şifrelenmiş olan veriyi kontrol ediyor. EMail daha önce veritabanına kayıt edilmiş mi ?
                'password'  => 'nullable|min:8',
                'phone'     => 'required',
            ],
                [
                    'role.required'         => 'Üye Grubu Boş Bırakılamaz',
                    'name.required'         => 'İsim Alanı Boş Bırakılamaz!',
                    'surname.required'      => 'Soyisim Alanı Boş Bırakılamaz!',
                    'email.required'        => 'E-Posta Alanı Boş Bırakılamaz!',
                    'email.email'           => 'Geçerli E-Posta adresi giriniz',
                    'email_c.unique'        => 'Bu E-Posta Adresi Kayıtlıdır',
                    'password.required'     => 'Şifre Alanı Boş Bırakılamaz!',
                    'password.min'          => 'Şifreniz en az 8 karakter olmalıdır',
                    'phone.required'        => 'Telefon Alanı Boş Bırakılamaz!'
                ]);

            $data = User::find($id);
            if($data->id==1) //Admin bilgilerinden sadece şifre değiştirilebilir
            {
                if($request->input('password'))
                {
                    $data->password         = bcrypt($request->input('password'));
                    if ($data->update()) {
                        return back()->with('success', 'Şifreniz Güncellenmiştir');
                    }
                }
                return back()->with('error', 'Bu Kullanıcıda Sadece Şifre Değiştirebilirsiniz');
            }
            $data->role_ID          = $request->input('role');
            $data->name             = $request->input('name');
            $data->surname          = $request->input('surname');
            $data->email            = base64_encode(base64_encode($request->input('email')));
            if($request->input('password'))
            {
                $data->password         = bcrypt($request->input('password'));
            }
            $data->phone            = $request->input('phone');

            if ($data->update()) {
                return back()->with('success', 'Güncelleme Başarılıdır');
            }
            return back()->with('error', 'Hata Meydana Geldi');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        if($data->id==1)
        {
            return false;
        }
        else
        {
            $data2 = User::destroy($id);
            if($data2)
            {
                return true;
            }
            return false;
        }
        return false;
    }


    /**
     * ÜYE GİRİŞ SAYFASI
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('AdminPanel.Login.index');
    }
    /**
     * ÜYE GİRİŞ KONTROLÜ
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function auth(Request $request)
    {
        if ($request->hasHeader('referer')) { //Eğer referans URL mevcut ise işleme başla. Böylece uzaktan erişimi kısmen zorlaştırırız
            //Güvenlik Kontrolleri
            $request->validate([
                'email'     => 'bail|required|email:rfc,dns',
                'password'  => 'required|min:8',
            ],
                [
                    'email.required'            => 'E-Posta Alanı Boş Bırakılamaz!',
                    'password.required'         => 'Şifre Alanı Boş Bırakılamaz!',
                    'email.email'               => 'Geçerli E-Posta adresi giriniz',
                    'password.min'              => 'Şifreniz en az 8 karakter olmalıdır'
                ]);

            $data = [
                'email'     =>  base64_encode(base64_encode($request->input('email'))),
                'password'  =>  $request->input('password'),
                'role_ID'   =>  1
            ];
            if(Auth::attempt($data,($request->remember == 'on') ? true : false))
            {
                return redirect(route('Dashboard.index'));
            }
            else
            {
                return back()->with('error','Bilgiler Hatalıdır');
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
        return redirect()->intended(route('Users.login'));
    }
}
