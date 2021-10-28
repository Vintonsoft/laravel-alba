<h2>Proje Tanımı</h2>
Laravel 8 ile oluşturulmuş ve basit şekilde düşünülmüş kategori, ürün ve üyelik işlemlerini gerçekleştirebileceğiniz bir sistemdir.

<h2>Özellikler</h2>
- Üyelik Modülü (Üye ve Yönetici Ekleme, Düzenleme, Silme)<br>
- Kategori Modülü (Kategori Ekleme, Düzenleme, Silme)<br>
- Ürünler Modülü (Ürün Ekleme, Düzenleme, Silme)

<h2>1) Laravel Kurulumu</h2>
a) Daha önce composer kurulumu yapılmamışsa kurulum yap. https://getcomposer.org/Composer-Setup.exe
a) Terminalden C:\AppServ\www klasörünün içine gir
<pre>cd C:\AppServ\www</pre>
b) Komutu yaz (projeadi kısmını istediğin gibi değiştirebilirsin):
<pre>composer create-project --prefer-dist laravel/laravel projeadi</pre>
<h2>2) AppServ Kurulumu</h2>
https://www.appserv.org/en/download/ sitesinden programı indirip kurun.

<h2>3) Github'dan ZIP dosyasını indirin</h2>
https://github.com/Vintonsoft/laravel-alba

<h2>4) Güncelle</h2>
İndirdiğiniz sıkıştırılmış klasörün içindeki dosyaları C:\AppServ\www yolunun içinde oluşturduğunuz klasördeki dosyaların üzerine yapıştırıp dosyaları güncelleyin.
<h2>5) Veritabanı Oluştur</h2>
Tarayıcıdan http://localhost/phpmyadmin linkini yazarak yeni bir veritabanı oluştur

<h2>6) Mysql Bağlantısı</h2>
.env dosyasının içindeki alanları veritabanı bilgilerinle değiştir.

<pre>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=demosite
DB_USERNAME=root
DB_PASSWORD=</pre>

Veritabanını oluşturduysanız ve mysql bağlantı ayarlarınızı tamamladıysanız aşağıdaki adımları gerçekleştirerek kurulumu tamamlayabilirsiniz.

<h2>7) Terminalden proje dizinine gidin</h2>
Komutları sırası ile uygulayın
<pre>
php artisan migrate<br>
php artisan db:seed<br>
php artisan serve
</pre>

<b>php artisan migrate</b> komutu ile veritabanı tablolarını eklemiş olacaksınız.

<b>php artisan db:seed</b> komutu ile tabloların varsayılan içeriklerini eklemiş olacaksınız.

<b>php artisan serve</b> komutu ile localhost'u aktif hale getirmiş olacaksınız.

<h2>8) Yönetici Paneline Giriş</h2>
Tarayıcınıza <b>http://localhost:8000/AdminPanel</b> yazarak yönetici paneline giriş yapabilirsiniz.<br>
<h4>Giriş Bilgileri:</h4>
<b>E-Posta Adresi :</b> admin@hotmail.com<br>
<b>Şifre :</b> 123456789<br>
<h2> laravel-alba</h2>
