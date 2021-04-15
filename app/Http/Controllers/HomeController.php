<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // return redirect()->to('form');
        return view('home');
    }

    public function store(Request $request)
    {
        // validasi

        $this->validate($request,[
            'email'=> 'required|email' 
        ]);
        
        //parameter ketiga untuk kustom validasi message
        // [
        //     'required' => ":attribute Tidak Boleh Kosong"
        // ]);
        return back();
        // dd($request->email);
    }

    public function user($nama)
    {

        // dd(compact('nama'));
        
        // return view('user')->with([
        //     'name' => $nama,
        //     'fullname' => "Priana Saputra"
            
        //     ]);
        $data['nama'] = $nama;
        return view('user',$data);
    }
}
