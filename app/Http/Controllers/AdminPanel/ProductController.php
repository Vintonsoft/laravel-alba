<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $data   =   Product::orderBy('id','desc')->paginate(20);
        return view('AdminPanel.Product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('AdminPanel.Product.create',compact('data'));
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
            $this->validate($request, [
                'category'      =>  'required|numeric',
                'title'         =>  'required|unique:products,title',
                'content'       =>  'required',
                'price'         =>  'required|numeric',
                'image.*'       => 'image|mimes:jpg,jpeg,png',
            ],[
                'title.required'            => 'Ürün adı boş olamaz!',
                'title.unique'              => 'Bu isim ile aynı ürün daha önce eklendi',
                'content.required'          => 'Açıklama alanı boş bırakılamaz!',
                'price.numeric'             => 'Fiyat alanına geçerli bir sayı giriniz.',
            ]);

            //Fiyatlama
            $price = [
                "price"     =>  $request->input('price'),
                "exchange"  =>  $request->input('exchange'),
            ];

            if ($request->image != NULL) //Eğer resim varsa
            {
                $file_name = 'product-' . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('Picture/Product/'), $file_name);
            } else {
                $file_name = NULL;
            }

            $data = new Product();

            $data -> cat_ID                 =       $request->input('category');
            $data -> title                  =       Str::title($request->input('title'));
            $data -> content                =       $request->input('content');
            $data -> price                  =       $price;
            $data -> image                  =       $file_name;
            $data -> seo_url                =       Str::slug($request->input('title'));

            if($data->save())
            {
                return back()->with('success','Kayıt Başarılıdır');
            }
            return back()->with('error','Hata Meydana Geldi');
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
        $data = Product::find($id);
        if ($data) {
            $categories = Category::all();
            return view('AdminPanel.Product.edit',compact('categories'))->with('data', $data);
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
            $data = Product::find($id);
            //Güvenlik Kontrolleri
            $this->validate($request, [
                'category'      =>  'required|numeric',
                'title'         =>  'required|unique:products,title,'.$id,
                'content'       =>  'required',
                'price'         =>  'required|numeric',
                'image.*'       => 'image|mimes:jpg,jpeg,png',
            ],[
                'title.required'            => 'Ürün adı boş olamaz!',
                'title.unique'              => 'Bu isim ile aynı ürün daha önce eklendi',
                'content.required'          => 'Açıklama alanı boş bırakılamaz!',
                'price.numeric'             => 'Fiyat alanına geçerli bir sayı giriniz.',
            ]);

            //Fiyatlama
            $price = [
                "price"     =>  $request->input('price'),
                "exchange"  =>  $request->input('exchange'),
            ];

            if ($request->hasFile('image')) //Eğer resim varsa
            {
                if ($data->image) {
                    $path = '/Picture/Product/' . $data->image; //Mevcut Resim Yolu
                    if (file_exists(public_path($path))) //Klasörde dosya var mı kontrol et.
                    {
                        unlink(public_path($path));
                    }
                }
                $file_name = 'product-' . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/Picture/Product/'), $file_name);
            } elseif (!$request->hasFile('image') and $request->remove == 1) {

                $path = '/Picture/Product/' . $data->image; //Mevcut Resim Yolu
                if (file_exists(public_path($path))) //Klasörde dosya var mı kontrol et.
                {
                    unlink(public_path($path));
                    $file_name = NULL;
                } else {
                    $file_name = NULL;
                }
            } else {
                $file_name = $data->image;
            }

            $data->cat_ID                   =       $request->input('category');
            $data->title                    =       Str::title($request->input('title'));
            $data->content                  =       $request->input('content');
            $data -> price                  =       $price;
            $data -> image                  =       $file_name;

            if($data->update())
            {
                return back()->with('success','Güncelleme Başarılıdır');
            }
            return back()->with('error','Hata Meydana Geldi');
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
        $data = Product::find(intval($id));
        //Yolu gösterilen resimleri sunucudan sil
        if($data->image!=NULL)
        {
            $path = '/Picture/Product/'.$data->image; //Resim Yolu
            if($data->image!=NULL && file_exists(public_path($path)))
            {
                unlink(public_path($path)); //Silme komutu
            }
        }
        $delete = Product::destroy(intval($id));
        if($delete) {
            echo 1;
        }
        echo 0;
    }
}
