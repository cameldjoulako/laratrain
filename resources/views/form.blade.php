@extends('layouts.app')

@section('content')
    <h1 class="my-5 text-base text-blue">Création d'un nouvel Article</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="title" id="title" class="border-gray-600 border-2">
        <textarea name="content" id="content" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
        <button type="submit" class="ml-2 p-1 text-white bg-green-500">Publier</button>
    </form>

@endsection
