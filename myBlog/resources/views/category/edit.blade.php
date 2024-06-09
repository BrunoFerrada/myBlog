<x-app-layout>
    <div>
        <h1 class="text-gray-100 text-center">Editar post</h1>
        <form action="/category/show/{{$post->id}}" method="POST">

            @csrf
            @method("PUT")
            <label>
                <input type="text" name="title" value="{{$post->title}}" placeholder="Ingrese un título">
            </label>

            <label>
                <textarea name="content" placeholder="Ingrese su contenido">{{$post->content}}</textarea>
            </label>

            <button type="submit"> Actualizar post </button>
            <a href="/category/"> Volver </a>
        </form>
    </div>
</x-app-layout>