<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    echo "Selamat Datang di Indomart";
});

Route::get('/satu', function () {
    // return view('welcome');
    echo "Selamat Datang di Alfamart";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "Selamat Datang di Transmart";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "Selamat Datang di Giant";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "Selamat Datang di Hypermart";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "Selamat Datang di Afanmart";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "Selamat Datang di Giantmart";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "Selamat Datang di Alfamidi";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "Selamat Datang di KDS";
});

Route::get('/sembilan', function () {
    // return view('welcome');
    echo "Selamat Datang di Supermart";
});

Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "Selamat Datang di Ratnamart";
});

//1 echo langsung nested
Route::get('/sebelas', function () {
    // return view('welcome');
    echo "Selamat Datang di Guardian";
});

//2 manggil view
Route::get('/nemplate', function () {
    return view('template');
    //lokasi view
});

//3 manggil controller
Route::get('/usang', 'Usang@index');
/* file controllernya namanya UsangController
   nama url usang
   index nama functionnya
*/
Route::get('/durian', 'Usang@buah');

Route::get('/terong', 'Usang@buah');

Route::get('/', 'Kontak@index');
Route::get('/CleaningService', 'CleanerController@index');