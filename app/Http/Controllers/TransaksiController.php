<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class TransaksiController extends Controller
{

    public function index()
    {
        $pesan = Pesanan::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Transaksi',
                    'pesan' => $pesan);
        return view('admin.transaksi.index', $data);
    }

    public function show($id)
    {
        $data = array('title' => 'View Transaksi');
        return view('admin.transaksi.show', $data);
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Transaksi');
        return view('admin.transaksi.edit', $data);
    }

    public function addtocart($id, Request $request)
    {
        Cart::create([
            'produk_id' => $id,
            'user_id'   => Auth::user()->id,
            'jumlah'    => $request->jumlah_pesan,
            'size'      => $request->size_produk
        ]);

        return redirect()->route('cart');
    }
    public function checkout()
    {
        $data = Cart::where('user_id', Auth::user()->id)->get();
        if (sizeof($data) == 0) {
            return redirect()->back()->with('failcheckout', 'ITEM KOSONG');
        }
        $tanggal = Carbon::now();

        $p = Pesanan::create([
            'user_id' => Auth::user()->id,
            'tanggal' => $tanggal,
            'status' => 0,
            'jumlah_harga' => 0
        ]);

        foreach ($data as $cart) {
            $pd = PesananDetail::create([
                'id_produk' => $cart->produk_id,
                'id_pesanan' => $p->id,
                'size_produk' => $cart->size,
                'jumlah' => $cart->jumlah,
                'jumlah_harga' => $cart->size * $cart->jumlah,
            ]);
            // KURANGI STOK HERE
            $p->jumlah_harga = $p->jumlah_harga + $pd->jumlah_harga;
            $cart->delete();
        }

        $p->save();

        return redirect()->route('order.detail', $p->id);
    }
}
