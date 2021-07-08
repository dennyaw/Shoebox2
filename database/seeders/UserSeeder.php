<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;//model table users
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {$inputan['name'] = 'Admin';
        $inputan['email'] = 'adm@adm.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('adm');//passwordnya 8karakter
        $inputan['hp'] = '14045';
        $inputan['alamat'] = 'Everywhere and nowhere';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);}
        {$inputan['name'] = 'aru';
            $inputan['email'] = 'aru@aru.com';//ganti pake emailmu
            $inputan['password'] = Hash::make('aru');//passwordnya 8karakter
            $inputan['hp'] = '14045';
            $inputan['alamat'] = 'Everywhere and nowhere';
            $inputan['role'] = 'member';//kita akan membuat akun atau users in dengan role admin
            User::create($inputan);}


    }
}