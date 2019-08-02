<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;

class PostController extends Controller
{
    public function search(Request $request)
    {
        // dd($request->all());
        $query = $request->q;
        $hasil = Post::where('title', 'LIKE', '%' . $query . '%')
        ->get();
        // dd($hasil);
        if (!$query) 
        {
            return back();
        }

        return view('result', compact('hasil', 'query'));
    }
    public function showkt($category)
    {
        $cat=Post::join('categories','categories.id','posts.category_id')->where('category_id',$category)->get();

        return view('hasil', compact('cat'));
    }
    public function index()
    {
        $posts = Post::latest()->paginate(100);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    public function store()
    {
        $this->validate(request(), [
           'title' => 'required',
           'content' => 'required|min:10',
           'link' => 'required|min:10',
           ]);

        Post::create([
           'title' => request('title'),
           'slug' => str_slug(request('title')),
           'content' => request('content'),
           'link' => request('link'),
           'category_id' => request('category_id')
           ]);

        return redirect()->route('post.index')->withInfo('Post ditambahkan');
    }

    public function tampil()
    {
        $posts = Post::latest()->paginate(8);
        return view('home', compact('posts'));
    }

    public function show($id)
    {
        $posts = Post::inRandomOrder()->get()->take(4);
        $categories=Category::all();
        $post=Post::where('slug',$id)->first();
        
        return view('post.show',compact('posts','post','categories'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Post $post)
    {
        request()->validate([
            'title'=>'required',
            'category_id'=>'required',
            'content'=>'required',
        ]);

        $post->update([
            'title' => request('title'),
            'category_id' => request('category_id'),
            'content' => request('content'),

            ]);

        return redirect()->route('post.index')->withInfo('Post berhasil dirubah');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index')->withDanger('Post berhasil dihapus');
    }
}
