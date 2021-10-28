<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();                         //Ürün ID otomatik alır
            $table->integer('cat_ID');                      //Kategori Id
            $table->string('title');                        //Ürün Adı
            $table->text('content');                        //Ürün açıklaması
            $table->json('price');                          //Ürünün fiyatı, Çoklu fiyat ekleme,doviz kuru, kdvvarmı, kdvoranı, alışfiyatı, piyasa fiyatı, Json eklenecek
            $table->text('image')->nullable();              //Ürün resimleri array formatında
            $table->string('seo_url');                      //Kısa URL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
