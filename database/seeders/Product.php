<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $products = [
            [
                'cat_ID' => '1',
                'title' => 'Amazfit Gtr 2E 47Mm Akıllı Saat Siyah',
                'content' => '<p><strong>Kolda Taşınan Sağlık</strong></p><p>24 saat boyunca kalp akışınızı izleyen saat, sağlığınızı yakından takip etmenizi sağlar. Yüksek kalp atış hızında sizi uyararak bilgilendirir. Stres seviyenizi sizin için izleyerek sakinliğinizi daima korumanızı sağlar. 90 yerleşik spor moduyla sağlıklı yaşam rutininizi destekler.</p><p><strong>Üst Düzey Gizlilik</strong></p><p>180 derece dönebilen ekranıyla sağ ve sol el kullanımı için uygun hale getirilmiştir. Bileğinizde değilken kendini parolayla kilitleyen ekranı bildirimlerinize başkalarının erişmesini engeller. Her zaman açık saat ekranıyla bildirimlerinizi göstermeden saate her an ulaşmanızı sağlar.</p>',
                'price' => '{"price": "1499", "exchange": "TL"}',
                'image' => 'products-amazfit-gtr-2e-47mm-akilli-saat-siyah60cfae4749d7f.jpg',
                'seo_url' => 'amazfit-gtr-2e-47mm-akilli-saat-siyah',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Turbox Atm9919346 Intel Core I5 3470 8Gb 240Gb Ssd 2Gb Gt1030 Freedos Oyun Bilgisayarı',
                'content' => '<p>Turbox ATM9919346 Intel Core i5 3470 8GB 240GB SSD 2GB GT1030 Freedos Oyun Bilgisayar / Tasarım İtibari ile Dvd Takılamamaktadır. Test Amaçlı Windows Deneme Sürümü İle Gönderilir.Ürünü Kontrol Ettikten Sonra Kendi Windowsunuzu Kurabilirsiniz.</p>',
                'price' => '{"price": "8399", "exchange": "TL"}',
                'image' => 'products-turbox-atm9919346-intel-core-i5-3470-8gb-240gb-ssd-2gb-gt1030-freedos-oyun-bilgisayari60cfafef89654.jpg',
                'seo_url' => 'turbox-atm9919346-intel-core-i5-3470-8gb-240gb-ssd-2gb-gt1030-freedos-oyun-bilgisayari',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Hp 255 G7 Amd Ryzen 3-3200U 4Gb 256Gb Ssd Windows 10 Home 15.6" Taşınabilir Bilgisayar 255F6Es',
                'content'=> '<p><strong>Performans için geliştirildi</strong></p><p>Lenovo ThinkBook 16p Gen 2 (16" AMD) ile ağır uygulamaları çalıştırıp aynı anda birçok işi eksiksiz yapabilirsiniz. AMD Ryzen™ 5000 H-Serisi Mobil İşlemcilerin gücü ile, akışkan ve yüksek performanslı bir bilgisayar deneyimi yaşayın. Ayrıca isteğe bağlı olarak ekleyebileceğiniz adanmış NVIDIA® GeForce RTX™ 3060 grafik donanım ile yüksek çözünürlüklü videoları düzenleyebilir, görüntü sentezini hızlandırabilir, yapay zeka ve görüntü işleme görevlerini yürütebilirsiniz. Üç adet performans modundan birini seçerek dizüstü bilgisayarınızın performansını iş yükünüze göre belirleyebilir ayrıca bilgisayarınızın NVIDIA® RTX Studio platformu sayesinde yaratıcı uygulamaları kesintisiz şekilde kullanabilirsiniz.</p><p>&nbsp;</p><p><strong>Güvenlik ve gizlilik garanti altında</strong></p><p>Güç tuşuna entegre edilmiş parmak izi okuyucu ile hızlı ve güvenli şekilde oturum açın. İsterseniz, SecureBIO güvencesi altındaki biyolojik oturum açma hizmetlerinden yararlanarak, isteğe bağlı gelen kızılötesi kamera veya Kurumsal Windows Hello kullanarak, yüz tanıma teknolojisiyle oturum açabilirsiniz. Parolalarınızı kurcalamaya karşı dayanıklı, firmware temelli Güvenilir Platform Modülü ile koruyun.</p>',
                'price' => '{"price": "4999", "exchange": "TL"}',
                'image' => 'products-hp-255-g7-amd-ryzen-3-3200u-4gb-256gb-ssd-windows-10-home-156-tasinabilir-bilgisayar-255f6es60cfaff3b1104.jpg',
                'seo_url' => 'hp-255-g7-amd-ryzen-3-3200u-4gb-256gb-ssd-windows-10-home-156-tasinabilir-bilgisayar-255f6es',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Lenovo V15-Iil Intel Core I5 1035G1 8Gb 256Gb Ssd Windows 10 Home 15.6" Fhd Taşınabilir Bilgisayar 82C5000Qtx',
                'content' => '<p>Lenovo V15-IIL Intel Core i5 1035G1 8GB 256GB SSD Windows 10 Home 15.6" FHD Taşınabilir Bilgisayar 82C5000QTX</p>',
                'price' => '{"price": "7499", "exchange": "TL"}',
                'image' => 'products-lenovo-v15-iil-intel-core-i5-1035g1-8gb-256gb-ssd-windows-10-home-156-fhd-tasinabilir-bilgisayar-82c5000qtx60cfb0e0d7f82.jpg',
                'seo_url' => 'lenovo-v15-iil-intel-core-i5-1035g1-8gb-256gb-ssd-windows-10-home-156-fhd-tasinabilir-bilgisayar-82c5000qtx',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Apple Ipad Air 4. Nesil 10.9" 256 Gb Wifi Tablet - Myfy2Tu/A',
                'content' => '<p>Apple iPad Air 4. Nesil 10.9" 256 GB WiFi Tablet - MYFY2TU/A</p>',
                'price' => '{"price": "7999", "exchange": "TL"}',
                'image' => 'products-apple-ipad-air-4-nesil-109-256-gb-wifi-tablet-myfy2tua60cfb15e08548.jpg',
                'seo_url' => 'apple-ipad-air-4-nesil-109-256-gb-wifi-tablet-myfy2tua',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Samsung 55Tu7000 Crystal 4K Ultra Hd 55" 140 Ekran Uydu Alıcılı Smart Led Tv',
                'content' => '<p>Samsung UE-55TU7000 Crystal 4K Ultra HD 55" 140 Ekran Uydu Alıcılı Smart LED TV<br>&nbsp;</p><p>Samsung UE55TU7000UXTK 55" 140 Ekran Uydu Alıcılı 4K Ultra HD Smart LED TV, üstün teknolojik özellikleriyle kullanıcılarına benzersiz fayda sağlıyor. Kristal Ekran teknolojisine sahip olan ürün,&nbsp;kristal netliğinde&nbsp;canlı ve son derece gerçekçi görüntüler ortaya koyuyor. 4K görüntü teknolojisini en iyi şekilde destekleyen Samsung TV, Ultra HD görüntülerle de gerçekçiliğini artırmayı başarıyor. Ekran teknolojilerinin yanı sıra ürün, modern tasarımıyla da dikkat çekiyor. Yaşam alanınıza yeniliği ve şıklığı taşıyan Samsung TV, ince çerçevesiyle ise sonsuz bir bakış açısına sahip olabilmenize imkan tanıyor. Samsung TV, tüm özellikleri ve daha fazlasıyla evinizin baş köşesinde yerini almayı hak ediyor.</p><p><strong>Kristal Ekran, Kristal Görüntüler</strong></p><p>Kristal Ekran teknolojisi, parlak ve son derece keskin renkler ortaya koyuyor. Daha geniş renk yelpazesiyle izleyicilerini büyüleyen Samsung TV, renkleri sürekli olarak optimize ediyor ve farklı programlardaki her detayı en ince ayrıntısına kadar görebilmenize imkan tanıyor.&nbsp;</p><p>Kristal Ekran, gücünü 4K Kristal İşlemciyle bütünleştiriyor. 4K Kristal İşlemci, renkleri sürekli olarak ayarlıyor ve kontrast oranını düzenliyor. Bu sayede HDR görüntü sağlayan Samsung TV, gücünü yalnızca tek bir çipten alıyor.</p><p>Tek bir çipin ilham verici görüntü teknolojisi&nbsp;4K çözünürlükle destekleniyor. 4K çözünürlük, 4 kat daha fazla piksel içeriyor. Bu sayede hak ettiğinizden daha keskin görseller sizleri bekliyor. Görüntüleri sanki gerçekten sahnedeymişsiniz gibi gerçekçi görebilmenize imkan tanıyan Samsung TV, Yüksek Dinamik Aralık özelliğiyle ise en karanlık sahnelerde bile sürükleyici görüntüleri en iyi, en net hâline getirmeyi başarıyor. Bu sayede sahne kayıpları yaşanmıyor.</p><p>Ekran optimizasyonu yalnızca televizyon programları sırasında değil diğer aktiviteler sırasında da çalışıyor. Oyun iyileştirici, en sevdiğiniz oyunları oynarken görsellerin kalitesini artırıyor ve daha net oyun sahneleri sunuyor.&nbsp;Tüm ekran özellikleriyle Samsung TV, gerçekçiliği en üst seviyesine kadar yaşayabilmenize imkan tanıyor.</p><p><strong>Düşündüğünüzden Daha Da Akıllı</strong></p><p>Smart TV özelliği televizyonlarda en çok aranan teknolojilerden biri.&nbsp;Samsung UE55TU7000UXTK 55" 140 Ekran Uydu Alıcılı 4K Ultra HD Smart LED TV, Smart TV özelliğini Tizen destekli olarak sunuyor. Bu Tizen destekli akıllı TV, çeşitli içerik platformlarına tek bir yerden ulaşabilmenize imkan tanıyor. Bu sayede yalnızca televizyon programlarıyla sınırlı kalmanıza gerek kalmıyor.</p><p>İnternet tarayıcısıyla çeşitli aramalar yapabilmenize imkan tanıyan ürün, Dokun ve İzle özelliğiyle ise benzersiz bir kolaylık ortaya koyuyor. Akıllı telefonunuzdaki içeriği televizyona aktarmanız için telefonunuzu Samsung TV\'ye dokundurmanız yeterli. Televizyon bunu algılıyor ve görüntüyü anında dev ekrana aktarıyor.</p><p>Çoklu Ekran, hem telefonunuzdaki hem de televizyondaki içeriği dev ekrandan izleyebilmenize imkan tanıyor. Bu sayede aynı anda hem televizyona hem de telefon ekranına bakabilirsiniz. Evinizdeki diğer teknolojik aletleri kontrol edebilmenizi sağlayan SmartThings\'in yanı sıra Samsung TV, kablosuz bağlantı özellikleriyle de öne çıkıyor. Böylece diğer cihazlarınızla etkileşim kurabilir; ofisinizi evinize taşıyabilirsiniz.</p><p><strong>Çok Daha Modern</strong></p><p>Yenilikçi tasarım özellikleriyle son derece modern bir görünüm oluşturan Samsung TV, yaşam alanınızla en iyi şekilde uyum sağlıyor. İnce çerçevesi sayesinde kaba görüntülerin önüne geçen Samsung TV aynı zamanda görüş açınızın daralmasına da engel oluyor. Bu sayede içeriklerinizi izlerken hiçbir ayrıntı dikkatinizi dağıtmıyor.</p><p>Güçlü ses özellikleriyle üç boyutlu sesler ortaya koyan ürün, içeriklerinizi izlerken görüntülere ve seslere hapsolmanıza imkan tanıyor. Bu sayede bir televizyondan çok daha fazlası oturma odanızda sizleri bekliyor.</p><p>Tek kablo çözümüyle kalabalık görünümü ortadan kaldıran Samsung TV, diğer tüm özellikleri ve daha fazlasıyla beklentilerinizi en iyi şekilde karşılıyor.</p>',
                'price' => '{"price": "8999", "exchange": "TL"}',
                'image' => 'products-samsung-55tu7000-crystal-4k-ultra-hd-55-140-ekran-uydu-alicili-smart-led-tv60cfb5fb5c32a.jpg',
                'seo_url' => 'samsung-55tu7000-crystal-4k-ultra-hd-55-140-ekran-uydu-alicili-smart-led-tv',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Vestel 58U9500 58" 147 Ekran Uydu Alıcılı 4K Ultra Hd Smart Led Tv',
                'content' => '<p>Vestel 58U9500 58" 147 Ekran Uydu Alıcılı 4K Ultra HD Smart LED TV</p>',
                'price' => '{"price": "7536", "exchange": "TL"}',
                'image' => 'products-vestel-58u9500-58-147-ekran-uydu-alicili-4k-ultra-hd-smart-led-tv60cfb7ed6a712.jpg',
                'seo_url' => 'vestel-58u9500-58-147-ekran-uydu-alicili-4k-ultra-hd-smart-led-tv',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Samsung Ww90J5475Fx/Ah 9 Kg 1400 Devir Çamaşır Makinesi',
                'content' => '<p><strong>Lütfen yetkili servisten önce ürün ambalaj ve kutusunu açmayınız. Yetkili servis gelmeden kutuyu açmanız durumunda ürün garanti dışı kalacaktır.</strong><br><br>&nbsp;</p><p>9 kilogramlık büyük yıkama kapasitesi ile tüm ailenin çamaşırlarını tek seferde yıkayan&nbsp;Samsung WW90J5475FX/AH A+++ 9 kg 1400 Devir Çamaşır Makinesi, hem zamandan hem de enerji tüketiminden büyük oranda tasarruf etmenizi sağlıyor. A+++ enerji verimliliği sınıfında yer alan ve bu sayede geleneksel bir modele oranla %40 daha verimli tüketim özelliklerine sahip olan Samsung çamaşır makinesi ile siz de elektrik faturalarınızı kontrol altına alabilir; hem doğayı hem de bütçenizi rahatlıkla koruyabilirsiniz.&nbsp;</p><p><strong>Güçlü,&nbsp;Dayanıklı ve Tasarruflu Motor Teknolojisi&nbsp;</strong></p><ul><li>Dijital inverter teknolojisi ile geliştirilen çamaşır makinesi motoru, geleneksel motorlara göre 10 kat daha güçlü çalışma performansı sergiliyor. Geleneksel motor modelleri gibi standart fırça ile değil güçlü mıknatıslar ile tasarlanan inverter motor, bu sayede çok daha az enerji tüketiyor ve büyük oranda tasarruf sağlıyor.</li><li>Fırça kullanımının ortadan kaldırılması,&nbsp;tamburun dönüşü sırasında meydana gelen sürtünmeyi minimuma indiriyor ve bu sayede çamaşır makinesinin iç materyallerinin aşınma ve yıpranma oranını azaltıyor. Hem daha güçlü hem de çok daha dayanıklı bir çalışma performansı sergileyen dijital inverter motoru, çamaşır makinesinin uzun yıllar sonra bile ilk günkü gibi çalışmasını sağlıyor. Siz de bu gelişmiş motor teknolojisi ile tasarlanan Samsung çamaşır makinesine sahip olabilir; güçlü, dayanıklı ve tasarruflu performans özelliklerini bir arada bulabilirsiniz.</li><li>Inverter motor ile sağlanan büyük enerji tasarrufunun yanı sıra A+++ enerji verimliliği sınıfında yer alan Samsung çamaşır makinesi, baştan sona her detay ile çok daha verimli bir performans sergiliyor.</li><li>Elmas Kazan teknolojisi ile geliştirilen tambur tasarımı, en hassas kıyafetlerinizi dahi zarar görmeden temizliyor. Tamburun dönüşü ile meydana gelen yumuşak dalgalanmalar, narin kumaşları son derece hassas bir şekilde temizliyor ve çok daha küçük tasarlanan su giderleri kumaşın takılarak zarar görmesini önlüyor.</li><li>Hızlı Yıkama programı ile 15 dakikada etkin temizlik sunan Samsung çamaşır makinesi, en yoğun günlerde dahi hızlı ve kolay şekilde çamaşır&nbsp;yıkama şansı sunuyor. Günlük kıyafetler için ideal temizlik sunan hızlı yıkama programını dilerseniz 20, 30, 40, 50 ve 60 dakikalık sürelerde çalıştırabilir; program süresini kirlilik oranına göre belirleyebilirsiniz.</li></ul><p><strong>Teknik Detaylarda Üstün Kalite</strong></p><ul><li>Yıkama Kapasitesi: 9 kg</li><li>Enerji Sınıfı: A+++</li><li>Devir Hızı: 1400</li><li>Ürün Boyutları (Y x G x D): 85 x 60 x 55 cm</li><li>Ses Seviyesi (Yıkama/Sıkma) : 50 / 74 dB</li><li>Yıllık Su Tüketimi : 9400 lt</li><li>Yıllık Enerji Tüketimi : 196 kWh</li><li>Ek Özellikler: Hızlı Yıkama,&nbsp;Ön Yıkama</li></ul><p><strong>Özenle Geliştirilmiş Tasarım</strong></p><p>Tüm detayları ile üstün teknolojik özelliklere sahip Samsung çamaşır makinesi, kullanıcıların tüm ihtiyacı karşılamayı başarıyor. Kolay kullanma kılavuzu ve garanti belgesi ile birlikte satışa sunulan model, güçlü ve dayanıklı yapısı ile uzun yıllar sizinle kalmayı hedefliyor.</p><p><strong>Güvenilir Teknolojik Ürün Markası</strong></p><p>Bilgisayardan beyaz eşyaya, mobil cihazlardan televizyona kadar çok sayıda ürün tasarımında bulunan lider marka Samsung, kullanıcıların ihtiyaç duyacağı hemen her teknolojik cihaz için üstün özelliklerde ürünler geliştiriyor.&nbsp;Çevre dostu cihazları ve üretim alanları&nbsp;ile doğaya zarar vermeyi önleyen uzman firma,&nbsp;geliştirdiği ürünlerde enerjiyi verimli kullanmaya&nbsp;büyük önem veriyor ve dayanıklı ürünler geliştirerek uzun yıllar boyunca kullanım şansı&nbsp;veriyor.</p><p><strong>Kolay ve Konforlu Kullanım İmkanı</strong></p><p>Geniş program yelpazesi&nbsp;ile günlük hayatın hızlı temposuna&nbsp;kolayca uyum sağlayan Samsung WW90J5475FX/AH A+++ 9 kg 1400 Devir Çamaşır Makinesi, kullanıcıların beklentilerini eksiksiz bir şekilde karşılamayı başarıyor. Hem güçlü hem tasarruflu çalışma performansı sayesinde etkili bir temizlik sağlarken konforlu kullanım imkanının tadını çıkarabilir; sıra dışı bir beyaz eşya deneyimi yaşayabilirsiniz.&nbsp;</p>',
                'price' => '{"price": "4699", "exchange": "TL"}',
                'image' => 'products-samsung-ww90j5475fxah-9-kg-1400-devir-camasir-makinesi60cfb8d38ddff.jpg',
                'seo_url' => 'samsung-ww90j5475fxah-9-kg-1400-devir-camasir-makinesi',
            ],
            [
                'cat_ID' => '1',
                'title' => 'Samsung Ar5000H Ar12Txhqbwk/Sk A++ 12000 Btu Duvar Tipi Inverter Klima',
                'content' => '<p>Samsung AR5000H AR12TXHQBWK/SK A++ 12000 BTU Duvar Tipi Inverter Klima Gelişmiş teknolojisiyle modern özellikleri kullanıcılarına sunan Samsung AR5000H AR12TXHQBWK/SK A++ 12000 BTU Duvar Tipi Inverter Klima, dekoratif ve sağlam gövde yapısıyla bulunduğu ortama zarif bir görünüm kazandırır. Yüksek soğutma ve ısıtma kapasitesine sahip olan şık klimayla evinizi kısa sürede iklimlendirebilirsiniz. Tüm mevsimlerle uyumlu şekilde çalıştırılabilen Samsung A++ Inverter Klima ile elektrik tüketimini minimum oranda gerçekleştirebilirsiniz. Ekonomik modlara da sahip olan klima yardımıyla ideal ısı düzeyini tasarruflu şekilde elde edebilirsiniz. Kullandığı Inverter teknolojisiyle de beğeni kazanan ürün, gereksiz şekilde çalışmayı engeller. Belirlediğiniz sıcaklık seviyesi oluştuğunda klimanın kompresörü çalışma temposunu düşürür ya da durdurur. Güçlü bir motora sahip olan Samsung 12000 BTU Inverter Klima ile evinizde geniş bir bölgeye etki ederek havayı daha temiz hale getirebilirsiniz. Filtreleriyle Evleri Daha Hijyenik Kılan Klima Havanın kalitesini artıran ve kötü kokuları önleyen filtreler klimanın bulunduğu ortamı daha hijyenik hale getirmeyi başarır. Güvenli kullanım yaşatan pratik filtrelerin çıkarılabilir yapısı ile bu ürünleri kısa sürede temizleyip yeniden iklimlendirme cihazınıza takabilirsiniz. A++ enerji verimliliği notuyla dikkat çeken doğa dostu klimayı evinizde veya ofisinizde kullanarak ekonomik bir şekilde serinleyip ısınabilirsiniz. Dijital ekran desteği de sunan klima sayesinde üfleme işleminin hangi değerlerle devam ettiğini takip edebilirsiniz. Sessiz bir şekilde çalıştığı için uyku saatlerinde de verimliliği üst düzeye çıkaran Samsung Duvar Tipi Inverter Klima ile uyku kalitenizi koruyabilirsiniz. Dayanıklı ve Fonksiyonel Klima Dış ünitesi soğukta donmaya karşı dayanıklı olan klimayı kullanarak kış soğuklarında verimli bir şekilde ısınmaya devam edebilirsiniz. Fan kanatlarının geniş yapısı sayesinde güçlü bir hava akışı yaratabilen dış ünite ile iklimlendirme konusunda başarılı bir performansa erişebilirsiniz. İç ünitenin gelişmiş tasarım özellikleriyle beraber dışarıdan gelen havanın oldukça geniş bir açıyla içeriye yayılması mümkün hale gelir. Samsung Duvar Tipi Inverter Klima modeli pratik uzaktan kumandasıyla fonksiyonları kolayca kullanabilmenizi sağlar. Yumuşak tuş takımına sahip kumandalar geniş tasarımlarına ek olarak üstlerinde yer alan yazılarla da kullanıcıları için kolaylık yaratır. Kademeli kullanım özelliğiyle klimanızın ayarlamalarını manuel olarak yapabilirsiniz. Samsung Inverter klimanın otomatik modlarını kullanarak çeşitli durumlara karşı hazırlanmış programları değerlendirebilirsiniz.</p>',
                'price' => '{"price": "5000", "exchange": "TL"}',
                'image' => 'products-samsung-ar5000h-ar12txhqbwksk-a-12000-btu-duvar-tipi-inverter-klima60cfbae4bb13d.jpg',
                'seo_url' => 'samsung-ar5000h-ar12txhqbwksk-a-12000-btu-duvar-tipi-inverter-klima',
            ],
            [
                'cat_ID' => '2',
                'title' => 'Rayban Rb4187 622/8G Erkek Güneş Gözlüğü',
                'content' => '<p>Rayban RB4187 622/8G Erkek Güneş Gözlüğü Rayban RB4187 622/8G Erkek Güneş Gözlüğü</p>',
                'price' => '{"price": "920",  "exchange": "TL"}',
                'image' => 'products-rayban-rb4187-6228g-erkek-gunes-gozlugu60cfbbcca0290.jpg',
                'seo_url' => 'rayban-rb4187-6228g-erkek-gunes-gozlugu',
            ],
            [
                'cat_ID' => '2',
                'title' => 'Dilvin 1032 Askılı Elbise-Siyah',
                'content' => '<p>58 Viskoz 42 Poliamid Mankenin Ölçüleri Boy 173 Göğüs 79 Bel 58 Kalça 86Numune Bedeni S361</p>',
                'price' => '{"price": "159.99", "exchange": "TL"}',
                'image' => 'products-dilvin-1032-askili-elbise-siyah60cfbca9ef7f7.jpg',
                'seo_url' => 'dilvin-1032-askili-elbise-siyah',
            ],
            [
                'cat_ID' => '2',
                'title' => 'Join Us Polo Yaka Triko Elbise-Sarı',
                'content' => '<p>Join Us Polo Yaka Triko Elbise-Sarı</p>',
                'price' => '{"price": "349", "exchange": "TL"}',
                'image' => 'products-join-us-polo-yaka-triko-elbise-sari60cfbd361c9e9.jpg',
                'seo_url' => 'join-us-polo-yaka-triko-elbise-sari',
            ],
        ];
        DB::table('products')->insert($products);
    }
}
