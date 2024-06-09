<x-app-layout>
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Autor: </b> {{$post->poster}}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="/category/">Volver</a>
</x-app-layout>