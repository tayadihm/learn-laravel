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
	return view('pages.homepage');
    // return 'Halaman Homepage.<br> Selamat Belajar Laravel';
});

Route::get('about', function () {
	return view('pages.about');
    // return 'Aplikasi <strong> Siswaku </strong> dibuat sebagai latihan untuk belajar laravel';
});

Route::get('halaman-rahasia',['as' => 'secret', function () {
    return 'Anda sedang melihat <strong> Halaman Rahasia </strong>';
}]);

Route::get('showsecret', function () {
    return redirect()->route('secret');
});

Route::get('siswa', function () {
	$halaman = 'siswa';
	$siswa = ['cinta', 'laura', 'belgia'];
	return view('siswa.index', compact('halaman', 'siswa'));
});