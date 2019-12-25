<?php

namespace App\Http\Controllers;
use App\ModelUser;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function detProduk(){
        return view('daftar-produk-tenda');
    }

    public function detProdukTenda(){
        return view('detail-produkTenda');
    }
    public function pemesanan(){
        return view('pemesanan');
    }
    
    public function store(Request $request){
        ModelUser::create([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
            'tgllahir'=>$request->tgllahir,
        ]);
            // $request->all());
        return redirect('/login');
    }
    public function loginAuth(Request $request){
        dd('loginook');
        // if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        //     return redirect('/');
        // }
    }
}
