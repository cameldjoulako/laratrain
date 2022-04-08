<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
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

        //HTTP request

        /* store un fichier */
        dd($request->avatar->store('avatars'));


         /* Récuperer un fichier */
         dd($request->file('avatar'));

        /* Récuperer tout sauf le cetain champ */
        dd($request->except(['_token']));

        /* Récuperer une portion des champs du formulaire */
        dd($request->only(['_token', 'scales']));

        /* traitement des checbox avec des boolean */
        dd($request->boolean('scales'), $request->boolean('horns'));



        /* tout les input
        dd($request->all());

         /* recuperer une valeur depuis l'url*/
         //dd($request->query('name'));


        /* vérifie la method s*/
        //dd($request->isMethod('GET'));

        /* récuperer la method sur laquelle on poste le formulaire*/
        //dd($request->method());

        /* récuperer l'url avec les parametres et ajouté une requete d'ajout de clé*/
        //dd($request->fullUrlWithQuery(['name' => "CamelDjoulako"]));

        /* récuperer l'url avec les parametres*/
        //dd($request->FullUrl());


        /* récuperer l'url */
        //dd($request->url());

       /*  dd($request->routeIs('posts.store'));
        dd($request->is('admin/posts/*'));
        dd($request->path()); */

         //dd($request->input(('title'))); //ou
         //dd($request->title); */




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
