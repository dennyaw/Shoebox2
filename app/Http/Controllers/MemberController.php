<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->paginate(20);
        $user = \App\Models\User::where('role', 'member')->get();
        $data = array(
            'title' => 'Member',
            'user' => $user
        );

        return view('admin.member.index', $data);
    }


    public function show($id)
    {
        $data = array('title' => 'Show Member');
        return view('admin.member.show', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function cart()
    {
        $cart = Cart::with('produk')->where('user_id', Auth::user()->id)->get();
        return view('user.cart.index', [
            'data' => $cart,
        ]);
    }

    public function order()
    {
        $data = Pesanan::with('detail')->where('user_id', Auth::user()->id)->get();
        return view('user.order.index', [
            'data' => $data,
        ]);
    }

    public function orderdetail($id)
    {
        $data = Pesanan::with('detail', 'detail.barang')->where('user_id', Auth::user()->id)->find($id);
        return view('user.order.show', [
            'data' => $data,
        ]);
    }

    public function profile()
    {
        $data = array('title' => 'Profil');
        return view('user.profile.index');
    }

}
