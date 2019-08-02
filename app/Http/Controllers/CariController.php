<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Post::where('id', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query'));
    }
}
