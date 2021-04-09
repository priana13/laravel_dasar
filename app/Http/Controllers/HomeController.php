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

        return view('home');
    }

    public function store(Request $request)
    {
        return $request->nama;
    }

    public function user($nama)
    {

        // dd(compact('nama'));
        
        // return view('user')->with([
        //     'name' => $nama,
        //     'fullname' => "Priana Saputra"
            
        //     ]);

        return view('user',compact('nama'));
    }
}
