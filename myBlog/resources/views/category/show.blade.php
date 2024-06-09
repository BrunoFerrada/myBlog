<x-app-layout>
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Autor: </b> {{$post->poster}}
    </p>
    <p>
        {{$post->content}}
    </p>

    @if (Auth::check() && Auth::user()->name == $post->poster)
    <a href="/category/edit/{{$post->id}}">editar</a>
@endif
    <a href="/category/">Volver</a>
</x-app-layout>