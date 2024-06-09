<x-app-layout>
    <h1>Nuevo post</h1>
    <form action="/category" method="POST">

        @csrf

        <label>
            Título: <input type="text" name="title">
        </label>

        <label>
            contenido: <textarea name="content"></textarea>
        </label>

        <button type="submit"> Crear post </button>
        <a href="/category/"> Volver </a>
    </form>
</x-app-layout>