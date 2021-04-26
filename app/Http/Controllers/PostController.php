<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $user = User::find($id);

        // return $user->FullName();

        // $posts = Post::paginate(5);

        $user = User::Umur(12)->get();

        dd($user);

        $posts = Post::PostBulanIni()->get();


        return view('post.index',[
            'posts' => $posts,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //Cara pertama dengan $fillable di model
        // Post::create([
        //     'title' => "Judul artikel",
        //     'content' => "ini adalah isi dari konten"
        // ]);

        // Cara kedua tanpa $fillable di model

        $post = new Post;

        $post->title = "Judul 2";
        $post->content = "Isi dari konten 2";

        $post->save();
        
        return 'ok';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);

        // dd($post->publised_at);

        return view('post.show',[
            'post' => $post,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // Cara Update pertama
        // $post->update([
        //     'title' => 'Post Satu'
        // ]);

        $post->title = "Judul 1 yang telah diedit";
        $post->save();




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
        $post = Post::findOrFail($id);
       
        $post->delete();
    }
}
