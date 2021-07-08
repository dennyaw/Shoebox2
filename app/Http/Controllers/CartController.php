<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Cart');
        return view('user.cart.index', $data);
    }

}
