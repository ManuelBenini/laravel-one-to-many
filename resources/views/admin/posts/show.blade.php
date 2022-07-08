@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-5">Pagina show della C(R)UD</h1>

        <h1>Titolo: {{$post->title}}</h1>
        <h1 class="my-4">Categoria: {{$post->category ? $post->category->name : 'Questo post non ha nessuna categoria'}}</h1>
        <p>Contenuto: {{$post->content}}</p>

        <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Torna all'elenco</a>

    </div>
@endsection
