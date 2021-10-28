<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Menü tüm sayfalarda aktif olacak. Eğer Kategori tablosu yoksa menü boş görünecek. Böylece sitede hataya sebep olmayacak
        $tables = Schema::hasTable('categories');

        if($tables)
        {
            //Layout dosyasında Menü kategorilerini çek
            $menus = Category::all();
        }
        else
        {
            $menus = NULL;
        }
        View::share(['menus' => $menus]);
    }
}
