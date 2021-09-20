@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>
    <br>
    <br>

    @foreach ($posts as $post)
        <h3> {{ $post }}</h3>
        <br>
    @endforeach
@endsection
