<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
</p>

## Aplikasi Sederhana menggunakan Laravel 

####  Cara Install Composer dan Laravel
1. Install Composer dulu ya (baca aja disini)
    [Composer Documentation](https://getcomposer.org/doc/)
2. Install Laravel nya ya
`composer create-project laravel/laravel workshop_laravel`
3. Setelah itu masuk ke dalem folder project nya
`cd workshop_laravel`
4. Running deh pake
`php artisan serve`

####  Membuat Migration Database
1. Konfigurasi database, buka file `.env`
`DB_CONNECTION=mysql` // jenis database
`DB_HOST=127.0.0.1` // ip localhost
`DB_PORT=3306` // port
`DB_DATABASE=nama_database`
`DB_USERNAME=username`
`DB_PASSWORD=password`
2. Buka terminal atau command prompt
3. Migration Database
`php artisan make:migration create_product_table`
4. Buka file migration pada `database/migrations/`
5. Edit file yang telah dibuat, contoh dibawah ini.
`Schema::create('product', function (Blueprint $table) {`
    `$table->id();`
    `$table->string('name');`
    `$table->integer('stock');`
    `$table->integer('price');`
    `$table->text('description');`
    `$table->timestamps();`
`});`
6. Referensi tipe data [Klik Disini](https://laravel.com/docs/10.x/migrations#available-column-types)
7. Jalankan perintah `php artisan migrate`
8. Tunggu Hasil migration database

### Memahami konsep MVC
1. Saya membuat artikel terkait MVC [Baca Disini.](https://medium.com/@fajri.hulvi/konsep-mvc-512fea5eba0)

### Templating di Laravel
Ada 3 cara dalam melakukan templating component pada laravel:
* `@include` digunakan untuk memanggil file yang berisi file HTML ke dalam tag HTML.
* `@extends` digunakan untuk memanggil file yang berisi file HTML di luar tag HTML.
* `@section` dan `@endsection` digunakan untuk membatasi berdasarkan section.
* `@yield` digunakan untuk memanggil nama section.
1. Bagi layout admin, buat folder `admin` pada `resources/views` dengan bagian: head, sidebar content, footer.
2. Bagi layout sebelum login, Buat folder `login` atau `register` pada `resources/views` dengan bagian: head,  content, footer.
3. Pelajari bootstrap atau sejeninsnya dan lakukan import package CSS dan JS pada project kita.

### Membuat Controller
Jalankan perintah `php artisan make:controller ProductController` pada terminal.

### Membuat Routing
1. Pelajari http method seperti : `GET, POST, PUT,` dan `DELETE`.
2. Route berada di folder `routes/web.php`.
3. Contoh route method GET
    `Route::get('/', [UserController::class, 'login'])->name('user.login');`
4. Contoh route method POST
    `Route::post('/store', [ProductController::class, 'store'])->name('products.store');`
5. Contoh route dengan parameter
    `Route::get('/show/{id}', [ProductController::class, 'show'])->name('products.show');`

### Membuat Model
Jalankan perintah `php artisan make:model Product` pada terminal

### Membuat Database Faker
##### Membuat Factory
Jalankan perintah `php artisan make:factory ProductFactory --model=Product` pada terminal
##### Membuat Seeder
Jalankan perintah `php artisan make:seeder ProductSeeder` pada terminal
##### Menjalankan Seeder
Jalankan perintah `php artisan db:seed --class=ProductSeeder` pada terminal

### Membuat Halaman Tampilan
1. Membuat halaman tampilan pada `resources/views` dengan disarankan membuat folder-folder terlebih dahulu. Contoh : membuat modul product di folder product.