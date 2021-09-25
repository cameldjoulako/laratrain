@extends('layouts.app')

@section('content')
    <h1 class="my-5">{{ $post->title }}</h1>
    <br>
    <p>{{ $post->content }}</p>

@endsection
