<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->paginate(20);
        $user =User::where('role','admin')->get();
        $data = array('title' => 'Admin',
                    'user' => $user);

        return view('admin.pegawai.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $user = User::orderBy('created_at', 'desc')->paginate(20);
        $user =User::where('role','admin')->get();
        $data = array('title' => 'Form Produk Baru',
                    'user' => $user);
        return view('admin.pegawai.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
        ]);
        $itemuser = $request->user();
        $inputan = $request->all();
        $inputan['name'] = $nama;
        $inputan['email'] = $email;
        $inputan['password'] = $password;
        $inputan['hp'] = $hp;
        $inputan['alamat'] = $alamat;
        $inputan['role'] = 'admin';
        $itemproduk = User::create($inputan);
        return redirect()->route('pegawai.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array('title' => 'View Pegawai');
        return view('admin.pegawai.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array('title' => 'Form Edit Pegawai');
        return view('admin.pegawai.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}