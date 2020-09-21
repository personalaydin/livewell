Laravel Framework Installation
==================

1. Download repository
2. Go to downloaded directory and execute this command: "cd private"
3. Execute: "cp .env.example .env"
4. Edit .env file.
5. Execute this command in private folder: "composer install"
6. php artisan migrate
7. php artisan db:seed
8. Go to ../public_html folder
9. Execute: "npm install"
10. Execute: "npm run prod"
11. Copy "uploads" folder




Frontend

- html blade dosyalarının yerleri - 

— <head> tabi, script vs csslerin tanımlandığı yer
private/resources/views/web/template/layout.blade.php

— Header
private/resources/views/web/template/partials/header.blade.php

— Footer
private/resources/views/web/template/partials/footer.blade.php

— Home
private/resources/views/web/page/templates/home.blade.php

— Products
private/resources/views/web/page/templates/Products.blade.php

—Corporate
private/resources/views/web/page/templates/Corporate.blade.php

—Contact
private/resources/views/web/page/templates/Contact.blade.php

—Privacy Policy
private/resources/views/web/page/templates/Popup.blade.php



 - HTML -BLADE -

İlgili sayfalardaki {{-- Content --}} ifadesinin olduğu alana düz html kodlarını yazabilirsin.




- SCCS - 

Sayfalarla ilgili scss’ler public_html/assets/_scss/components/ klasörünün altında, ilgili sayfalarla ilintili isimler var.
Örneğin public_html/assets/_scss/components/_header.scss adı üstünde header’ın kodlarını içeriyor

_corporate ve _products adında scssler oluşturdum bunların içine yazabilirsin.

Ya da _livewell.scss dosyasının içine dilediğin gibi tüm kodlarını yazma yolunu da tercih edebilriisin. 

_livewell.scss’i sen oluştur dilersen. Dosyayı bu klasöre create et. Sonra public_html/assets/_scss/main.scss dosyasında componentlerin en üstüne @import 'components/livewell'; olarak ekle ve public içinde nem run prod çalıştır. Bu şekilde yeni sccsler ekleyebilirsin. 

Bazı helper cssler var ama sen kendi bildiğin gibi yapsan daha hızlı yol alırsın tahminimce. 

public_html/assets/_scss/base dosyasında genel ayarlar var scc’e ilişkin body vs

public_html/assets/_scss/definitions/settings.scss dosyasında da tanımlı renk kodları var. Renkleri değiştirmek istediğinde buradan müdahale edebilir, yeni renkleri buraya yazabilirsin isteğe göre


- JS - 

Ana js public_html/assets/js/scripts.js dosyası. Değişiklikler yapınca nem run prod yapman gerek biliyorsun, ya da watch yapıyordun sanırım sen. Sana kalmış.



Şimdilik hiç sentence falan uğraşma hard text doğrudan yaz html içine. Ben onları sonradan sentence içine kaydederim. Diğer projede de sentence konusunda da bilgin olduğu için zaten, belki onları da sen yazarsın. Nasıl arzu edersen. 








--- Yeni Helper'lar--

Yeni bir helper class ekledim positions diye. Bu helperlar hbc’nin sitesinde çok işe yarıyordu. burada da kullanabiliriz. Kullanım şekilde; örneğin margin-left: 10px için  ml-10 classı tanımlanmış durumda. -100'den 500'e kadar. eksi sayılar teker teker, artı sayılar 5'er 5'er tükseliyor. Eksi tanımlamak için ml--10 yapıyorsun, margin-left: -10px olarak otomatik oluşuyor
10:19
xxs, xs, sm, md gibi breakpointleri kullanabiliyorsun
10:19
şu listeye göre davranıyor
10:19
$grid-breakpoints: (
    xxs: 0,
    xs: 400px,
    sm: 576px,
    md: 768px,
    lg: 992px,
    xl: 1100px,
    xxl: 1350px,
    xxxl: 1600px,
    xxxxl: 1700px
);
10:20
örneğin md breakpointinde margin left 10 olsun istiyorsun, şu şekilde yazıyorsun; ml-md-10
10:20
ama mobilde bu değer 30'a çıksın. ml-md-10 ml-xs-30 şeklinde her birini tek tek tanımlayabiliyorsun
10:21
bir de yüzdelik değerler var. yani margin left:10% yapmak için -p- takısı kullanıyorsun. percent. ml-p-md-10
10:21
10:21
liste şu şekilde;
mr: margin-right
mb: margin-bottom
ml: margin-left
mr: margin-right
m-margin
pt: padding-top
pb: paddng-bottom
pl: padding-left
pr:padding-right
p:padding
10:23
paddinglerin -(negatif) değerleri yok +(pozitif) değerlerden başlayıp 5'erli olarak artıyor






