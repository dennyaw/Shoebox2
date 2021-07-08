<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\WomenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.index');
        }
    }
    return view('user.index');
})->name('landingpage');
Route::get('/about', 'App\Http\Controllers\HomepageController@about')->name('about');
Route::post('pesan/{id}', [TransaksiController::class, 'addtocart'])->name('addtocart');
// Route::get('/', [HomepageController::class, 'index']);
// Route::get('/dash', 'App\Http\Controllers\HomepageController@dash');
// Route::get('/produk', 'App\Http\Controllers\HomepageController@produk');
// Route::get('/produk/{slug}', 'App\Http\Controllers\HomepageController@produkdetail');

Route::middleware('member')->group(function () {
    //     //Men
    Route::prefix('men')->group(function () {
        Route::get('/',  [MenController::class, 'index'])->name('men.index');
        Route::get('/sneakers', [MenController::class, 'sneakers'])->name('men.sneakers');
        Route::get('/boots', [MenController::class, 'boots'])->name('men.boots');
        Route::get('/sandals', [MenController::class, 'sandals'])->name('men.sandals');
        Route::get('/{id}', [MenController::class, 'show'])->name('men.show');
    });
    //Women
    Route::prefix('women')->group(function () {
        Route::get('/',  [WomenController::class, 'index'])->name('women.index');
        Route::get('/heels', [WomenController::class, 'heels'])->name('women.heels');
        Route::get('/slipon', [WomenController::class, 'slipon'])->name('women.slipon');
        Route::get('/flats', [WomenController::class, 'flats'])->name('women.flats');
        Route::get('/{id}', [WomenController::class, 'show'])->name('women.show');
    });
    //Order
    Route::get('cart', [MemberController::class, 'cart'])->name('cart');
    Route::post('cart', [TransaksiController::class, 'checkout'])->name('checkout');
    Route::get('order', [MemberController::class, 'order'])->name('order.index');
    Route::get('order/{id}', [MemberController::class, 'orderdetail'])->name('order.detail');
    //Profil
    Route::get('profile', [MemberController::class, 'profile'])->name('profile.index');
    // //Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    // Route::group(['prefix' => 'member', 'middleware' => 'auth'], function () {
    //     //index
    //     Route::resource('/', 'App\Http\Controllers\HomepageController');
    //     Route::get('/dash', ['uses' => 'App\Http\Controllers\HomepageController@dash', 'as' => 'dash']);
    //     Route::post('pesan/{id}', 'App\Http\Controllers\WomenController@pesan');
    //     //Route::get('/show',['uses'=>'App\Http\Controllers\WomenController@flats','as'=>'show']);
    //     //Order
    //     Route::resource('cart', 'App\Http\Controllers\CartController');
    //     //ProfilMember
    //     Route::resource('profil', 'App\Http\Controllers\ProfilMemberController');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    //produk
    Route::resource('produk', 'App\Http\Controllers\ProdukController');
    //laporan
    //member
    Route::resource('member', 'App\Http\Controllers\MemberController');
    //pegawai
    Route::resource('pegawai', 'App\Http\Controllers\PegawaiController');
    //transaksi
    Route::resource('transaksi', 'App\Http\Controllers\TransaksiController');
    // image
    Route::get('image', 'App\Http\Controllers\ImageController@index');
    // simpan image
    Route::post('image', 'App\Http\Controllers\ImageController@store');
    // hapus image by id
    Route::delete('image/{id}', 'App\Http\Controllers\ImageController@destroy');
    // upload image produk
    Route::post('produkimage', 'App\Http\Controllers\ProdukController@uploadimage');
    // hapus image produk
    Route::delete('produkimage/{id}', 'App\Http\Controllers\ProdukController@deleteimage');
    //produk
    Route::get('product/{id}', 'App\Http\Controllers\PesanController@index');
    //index
    //     Route::resource('/', 'App\Http\Controllers\DashboardController');
    //Route::get('/index', 'App\Http\Controllers\DashboardController@index');->name('admin');\
    // upload image produk
});

Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dash');
