<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilMemberController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'User',
        'user' => $user);
        return view('user.profile.index', $data);
    }

    public function edit($id)
    {
        $itemproduk = Produk::findOrFail($id);
        $data = array('title' => 'Form Edit Produk',
        'user' => $user);
        return view('user.profile.edit',$data);
    }

    public function update()
    {
        $data = array('title' => 'Order');
        return view('user.profile.index', $data);
    }
}
