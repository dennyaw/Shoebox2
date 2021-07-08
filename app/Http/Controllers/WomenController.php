<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\PesananDetail;

use Auth;
use Carbon\Carbon;

class WomenController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk = Produk::where('kategori_produk', 'like', 'Women%')->get();
        $data = array(
            'title' => 'Homepage',
            'produk' => $produk
        );
        return view('user.women.index', $data);
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->size_produk = explode(',', $produk->size_produk);
        $data = array(
            'title' => 'Foto Produk',
            'produk' => $produk
        );
        return view('user.women.show', $data);
    }

    public function heels()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk = Produk::where('kategori_produk', 'like', 'Women Heels')->get();
        $data = array(
            'title' => 'Homepage',
            'produk' => $produk
        );
        return view('user.women.index', $data);
    }

    public function slipon()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk = Produk::where('kategori_produk', 'like', 'Women Slip On')->get();
        $data = array(
            'title' => 'Homepage',
            'produk' => $produk
        );
        return view('user.women.index', $data);
    }

    public function flats()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk = Produk::where('kategori_produk', 'like', 'Women Flats')->get();
        $data = array(
            'title' => 'Homepage',
            'produk' => $produk
        );
        return view('user.women.index', $data);
    }

   
}
