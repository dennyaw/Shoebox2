<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class MenController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Men%')->orderBy('created_at', 'desc')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.men.index', $data);
    }
    public function sneakers()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Men Sneakers')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.men.index', $data);
    }

    public function boots()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Men Boots')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.men.index', $data);
    }

    public function sandals()
    {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $produk =Produk::where('kategori_produk', 'like', 'Men Sandals')->get();
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.men.index', $data);
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
}
