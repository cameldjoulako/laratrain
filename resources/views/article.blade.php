@extends('layouts.app')

@section('content')
    <h1 class="my-5 mx-10">{{ $post->title }}</h1>

    @if ($post->image)
    <img src="{{  asset('images/'. $post->image->path) }}">
    @else
        <span class="text-red-500">Pas d'image</span>
    @endif
    <hr>
    {{-- <span>{{ $post->image }}</span> --}}
    <br>
    <p>{{ $post->content }}</p>
   {{--  @foreach ($post->comments as $comment)
        <p class="text-green-800 my-5 ml-10>{{ $comment->content }}</p>
    @endforeach --}}
    {{-- deuxieme methode --}}
   {{--  @forelse ( $post->comments as $comment )
        <p class="text-green-800 my-5 ml-10">{{ $comment->content }} </p>
    @empty
        <span class="text-red-500 my-5 ml-10">Aucun commentaires</span>
    @endforelse --}}
    <hr>

    @forelse ($post->tags as $tag )
        <span class="text-orange-600 ml-6">{{ $tag->name }} </span>

    @empty
        <span class="text-red-500">Aucun tag</span>
    @endforelse
@endsection
