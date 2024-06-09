<x-app-layout>
    <div class="bg-gray-800 rounded-lg w-96 p-6 mx-auto my-8">
        <h1 class="text-gray-100 text-center">Editar post</h1>
        <form action="/category/show/{{$post->id}}" method="POST" class="space-y-4 mx-auto">

            @csrf
            @method("PUT")
            <div>
                <label>
                    <input type="text" name="title" value="{{$post->title}}" placeholder="Ingrese un título" class="w-full px-3 py-2 rounded-md border bg-gray-900 border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-100">
                </label>
            </div>

            <div>
                <label>
                    <textarea name="content" placeholder="Ingrese su contenido" class="w-full px-3 py-2 rounded-md border bg-gray-900 border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-100">{{$post->content}}</textarea>
                </label>
            </div>

            <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 text-gray-100 px-4 py-2 rounded-md hover:bg-blue-600"> Actualizar post </button>
            <a href="/category/" class="bg-blue-500 text-gray-100 px-4 py-2 rounded-md hover:bg-blue-600"> Volver </a>
            </div>
        </form>
    </div>
</x-app-layout>