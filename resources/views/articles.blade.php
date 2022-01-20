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
@endsection
