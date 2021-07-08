<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomepageController extends Controller
{
    public function index() {
        $produk = Produk::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Homepage',
                    'produk' => $produk);
        return view('user.dash', $data);
    }

    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('user.about', $data);
    }

    public function dash() {
        $data = array('title' => 'Dashboard');
        return view('user.dash', $data);
    }
    /*public function men() {
        $data = array('title' => 'Men');
        return view('user.men.index', $data);
    }*/
    /*public function produk() {
        $data = array('title' => 'Produk');
        return view('admin.produk', $data);
    }*/
}