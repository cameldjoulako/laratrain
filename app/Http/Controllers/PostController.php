<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $title = "Comprendre l'intelligence artificielle";
        $title2 = "Tout sur le web";
        $title3 = "Imagerie Radar";

        //Recuperation des titres en bd
        $posts = [
            'Intelligence artificielle',
            'Tout sur le web',
            'Imagerie Radar'
        ];


        //passsage de paramettre a la vue 1ere methode
        //return view('articles', compact('title'));

        //passsage de paramèttre à la vue 2e methode
        //return view('articles')->with('title', $title);

        //passage de plusieurs parametres à la vue
        //return view('articles', compact('title', 'title2', 'title3'));

        //passage de plusieurs parametres à la vue avec les tableaux clé valeur
        /* return view('articles', [
            'title' => $title,
            'title2' => $title2,
            'title3' => $title3,
        ]); */


        //passage de plusieurs parametres à la vue
        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $posts = [
            1 => 'Intelligence artificielle',
            2 => 'Tout sur le web',
            3 => 'Imagerie Radar'
        ];

        $post = $posts[$id] ?? "Pas de titre";

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}