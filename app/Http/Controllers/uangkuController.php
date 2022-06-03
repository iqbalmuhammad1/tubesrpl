<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Uangku;
use App\Models\Auth;
class uangkuController extends Controller
{
    public function index()
	{
    	// mengambil data dari table wisata
		$user = tubes_rpl::all();
    }

    public function register()
	{
 
		// memanggil view register.php
		return view('register');
 
	}

    public function signin(){
        return view('login');
    }
 
	// method untuk insert data ke table
	public function store(Request $user)
	{
        // $post = new 
		// insert data ke table 
		$this->validate($user,[
			'nama_lengkap' => 'required',
			'username' => 'required',
			'password' => 'required',
		]);

		DB::table('user')->insert([
			'nama_lengkap' => $user->nama_lengkap,
			'username' => $user->username,
			'password' => $user->password,
		]);
		// alihkan halaman ke halaman home
		return redirect('/login');
 
	}

    public function afterlogin(Request $data){

        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $data->only('email','password');
        // if(user::attemp($credentials)){

        //     return redirect()->intended('/wisata.ind');
        // }

        return view('login');
    }
}