<x-app-layout>

    <h1>Todos los posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/category/show/{{$post->id}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>
</x-app-layout>