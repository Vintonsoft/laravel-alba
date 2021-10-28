<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();                                   //Id otomatik tanımlanacak
            $table->integer('role_ID');                               //Bağlı olduğu grup ID bilgisi
            $table->string('name','100');                       //Adı
            $table->string('surname','100');                    //Soyadı
            $table->string('email')->unique();                        //Email Adresi; Benzersiz olacak
            $table->timestamp('email_verified_at')->nullable();       //Email Doğrulama Tarihi
            $table->string('password');                               //Şifresi
            $table->string('phone','20')->nullable();           //Sabit Telefon Numarası
            $table->rememberToken()->nullable();                             //Beni Hatırla Token
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
        Schema::dropIfExists('users');
    }
}
