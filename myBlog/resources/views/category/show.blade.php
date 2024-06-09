<x-app-layout>
    <div class="bg-gray-800 rounded-lg mx-auto p-6 my-8 max-w-md text-center">
        <h1 class="text-2xl text-gray-100">{{$post->title}}</h1>
        <p class="text-gray-100 mb-4">
            <b>Autor: </b> {{$post->poster}}
        </p>
        <p class="text-gray-100 mb-4">
            {{$post->content}}
        </p>
        <div class="flex justify-between">
            @if (Auth::check() && Auth::user()->name == $post->poster)
                <a href="/category/edit/{{$post->id}}" class="bg-blue-500 rounded-md  px-4 py-2 text-gray-100 hover:bg-blue-600">editar</a>
                <form action="/category/show/{{$post->id}}" method="POST" >
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="bg-red-500 rounded-md  px-4 py-2 text-gray-100 hover:bg-red-600"> Eliminar post </button>
                </form>
            @endif 
            <a href="/category/" class="bg-blue-500 text-gray-100 px-4 py-2 rounded-md hover:bg-blue-600"> Volver </a> 
        </div>
    </div>
</x-app-layout>