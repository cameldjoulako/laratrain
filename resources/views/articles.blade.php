@extends('layouts.app')

@section('content')
    <h1 class="my-10 ml-8 text-2xl text-blue-800">Liste des articles</h1>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <h3 class="ml-10"> <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a> </h3>
            <br>
        @endforeach
    @else
        <span>Aucun post en base de données</span>
    @endif

    <h1>Liste des vidéos</h1>
    @forelse ( $videos->comments as $comment )
        <p class="text-green-800 my-5 ml-10">{{ $comment->content }} | Crée le {{ $comment->created_at->format('d/m/Y') }} </p>
    @empty
        <span class="text-red-500 my-5 ml-10">Aucun commentaires pour cette video</span>
    @endforelse

@endsection
