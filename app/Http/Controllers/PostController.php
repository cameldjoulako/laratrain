<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('title')->get();
        return view('articles', [
            'posts' => $posts
        ]);


        /* modification */
       /*  $post = Post::find(6);
        $post->update([
            'title' => "Deep learning pour la reconnaissanc de forme"
        ]); */


        /* Suppression */
        /*  for ($i = 10; $i < 15; $i++) {
            $article = Post::find($i);
            $article->delete();
        }*/
    }

    public function show($id)
    {
        /*  $posts = [
            1 => 'Intelligence artificielle',
            2 => 'Tout sur le web',
            3 => 'Imagerie Radar'
        ];

        $post = $posts[$id] ?? "Pas de titre"; */

        $post = Post::findOrfail($id);
        /*
        $post = Post::where('title', '=', 'Recusandae rerum ut ut nihil ab.')->firstOrFail();
        //dd($post); */

        return view('article', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        //dd($request->input('content'));
        /* $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
         */

        /* Bonne pratique */
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return view('form');
    }
}
