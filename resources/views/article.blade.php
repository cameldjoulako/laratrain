@extends('layouts.app')

@section('content')
    <h1 class="my-5 mx-10">{{ $post->title }}</h1>
    <br>
    <p>{{ $post->content }}</p>
   {{--  @foreach ($post->comments as $comment)
        <p class="text-green-800 my-5 ml-10>{{ $comment->content }}</p>
    @endforeach --}}
    {{-- deuxieme methode --}}
    @forelse ( $post->comments as $comment )
        <p class="text-green-800 my-5 ml-10">{{ $comment->content }} </p>
    @empty
        <p class="text-red-500 my-5 ml-10">Aucun commentaires</p>
    @endforelse

@endsection
