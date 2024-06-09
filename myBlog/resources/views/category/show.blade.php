<x-app-layout>
    <div class="bg-gray-800 rounded-lg mx-auto p-6 my-8 max-w-md text-center">
        <h1 class="text-2xl text-gray-100">{{$post->title}}</h1>
        <p class="text-gray-100 mb-4">
            <b>Autor: </b> {{$post->poster}}
        </p>
        <p class="text-gray-100 mb-4">
            {{$post->content}}
        </p>

        <a href="/category/" class="bg-blue-500 rounded-md  px-4 py-2 text-gray-100 hover:bg-blue-600">Volver</a>
    </div>
</x-app-layout>