@extends('layouts.app')

@section('content')
    <h1 class="my-5 text-base text-blue">Création d'un nouvel Article</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="text-red-500"> {{ $error }}</div>
        @endforeach
    @endif

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" id="title" class="border-gray-600 border-2 block my-2">
        <textarea name="content" id="content" cols="30" rows="10" class="border-gray-600 border-2 block my-2"></textarea>

        <label for="avatar">Image de mise en avant</label>
        <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg" class="block my-2">

        {{--< div>
            <input type="checkbox" name="scales" id="scales" checked>
            <label for="scales">Scales</label>
        </>
        <div>
            <input type="checkbox" name="horns" id="horns" checked>
            <label for="horns">Horns</label>
        </div> --}}
        <button type="submit" class="ml-2 p-1 text-white bg-green-500">Publier</button>
    </form>

@endsection
