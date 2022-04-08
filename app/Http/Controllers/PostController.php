<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        //$posts = Post::all();
        $posts = Post::orderBy('title')->get();
        $videos = Video::find(1);

        return view('articles', [
            'posts' => $posts,
            'videos' => $videos,
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

        $uppercase = new Uppercase;
        /* Validation du formulaire */
        $request->validate([
            'title' => 'required|min:5|max:200|unique:posts',
            'content' => ['required', 'min:5', $uppercase]
        ]);


        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return view('form');

    }

    public function register() {
        $post = Post::find(1);
        $video = Video::find(1);

        $comment1 = new Comment(['content' => 'My first comment']);
        $comment2 = new Comment(['content' => 'My second comment']);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);


        $comment3 = new Comment([
            'content' => 'My second  comment',
        ]);

        $video->comments()->save($comment3);
        //dd($post);
    }
}
