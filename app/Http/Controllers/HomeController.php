<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\SubcriptionFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerficationMail;
use App\Mail\NotifEmail;

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

        $data = [
            'posts' => [
                ['id' => 1,'title' => 'ABC'],
                ['id' => 2,'title' => 'DEF'],
                ['id' => 3,'title' => 'GHI']
            ]
            ];
        //menambil data dari database
       //return response()->json($data,200);
        // return redirect()->to('form');
        return view('home');
    }

    public function store(SubcriptionFormRequest $request)
    {
        // validasi

        // $this->validate($request,[
        //     'email'=> 'required|email' 
        // ]);
        
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

    public function email()
    {
        // Mail::to('priana.yhc@gmail.com')->send(new NotifEmail());

        return new NotifEmail();
    }
}
