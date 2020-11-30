# Codeigniter 4 - Header-Footer 

`New member of the old world`

header ve footer ları sayfaya tek tek tanımlayarak yüklemektense fonksiyon aracılığıyla her dosyayıda otomatik yükleyebilme imkanı sağlamaktadır.



### Bilgi

projenin Helper klasörüne  **views_helper.php** adlı dosyayı yükleyelim.



### Kullanımı

Eğer Controller dosyasının içerisindeki **BaseController.php** dosyasını kullanıyorsanız bu dosyanın 29. Satırındaki `protected $helpers` komutunun içerisine `["views"]` ekleyelim.

direk çağırmak için, `helper("views");` ekleyelim.

```php
views("page_name", $data);
```

böylece tasarımlarda header ve footer kendisi direk yüklemektedir.

 [Fonksiyon hakkında bilgi için](https://github.com/ahmettashan/CI4_themes/tree/main/app/Helpers) 
