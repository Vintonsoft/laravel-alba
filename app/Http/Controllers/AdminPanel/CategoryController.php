<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Sayfalama Çağır
        Paginator::useBootstrap();
        $data = Category::orderBy('id','asc')->paginate(10);
        return view('AdminPanel.Product.Category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Product.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasHeader('referer')) { //Eğer referans URL mevcut ise işleme başla.
            //Güvenlik Kontrolleri
            $request->validate([
                'title' => 'required|unique:categories|max:50',
            ],
                [
                    'title.required'        => 'Kategori Adı Boş Bırakılamaz',
                    'title.unique'          => 'Bu İsimde Kategori Mevcuttur',
                    'title.max'             => 'Maksimum 50 karakter olmalıdır',
                ]);

            $data = new Category();
            $data->title    = Str::title($request->input('title')); //İlk Harfleri BÜYÜK diğerini KÜÇÜK harfe çevirir
            $data->seo_url  = Str::slug($request->input('title'));

            if ($data->save()) {
                return back()->with('success', 'Kayıt Başarılıdır');
            }
            return back()->with('error', 'Hata Meydana Geldi');
        }
        else
        {
            abort(403);
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
        $data = Category::find($id);
        if($data) {
            return view('AdminPanel.Product.Category.edit')->with('data', $data);
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
        if ($request->hasHeader('referer')) { //Eğer referans URL mevcut ise işleme başla.
            $data = Category::find($id);
            //Güvenlik Kontrolleri
            $request->validate([
                'title' => 'required|max:50|unique:categories,title,'.$id,
            ],
                [
                    'title.required'        => 'Kategori Adı Boş Bırakılamaz',
                    'title.unique'          => 'Bu İsimde Kategori Mevcuttur',
                    'title.max'             => 'Maksimum 50 karakter olmalıdır',
                ]);

            $data->title = Str::title($request->input('title')); //İlk Harfleri BÜYÜK diğerini KÜÇÜK harfe çevirir

            if ($data->update()) {
                return back()->with('success', 'Güncelleme Başarılıdır');
            }
            return back()->with('error', 'Hata Meydana Geldi');
        }
        else
        {
            abort(403);
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
        $delete = Category::destroy(intval($id));
        if($delete)
        {
            echo 1;
        }
        echo 0;
    }
}
