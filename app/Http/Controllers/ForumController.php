<?php

namespace App\Http\Controllers;

use App\forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pertanyaan = forum::latest()->paginate(8);

        return view('/forum/index', compact('pertanyaan'));
    }
    public function create()
    {
        return view('forum.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(), [
          'judul' => 'required',
          'name' => 'required',
          ]);

        $post=new forum;
        $post->judul=$request->judul;
        $post->name=$request->name;
        $post->user_id=auth()->user()->id;
        $post->save();


        return redirect('/forum');
    }
    public function show(forum $forum)
    {
        $post=forum::where('name',$forum)->first();
        return view('/forum/show', compact('post','forum'));
    }
}
