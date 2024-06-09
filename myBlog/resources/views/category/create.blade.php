<x-app-layout>
    <div>
        <h1 class="text-gray-100 text-center">Nuevo post</h1>
        <form action="/category" method="POST">

            @csrf

            <label>
                <input type="text" name="title" placeholder="Ingrese un título">
            </label>

            <label>
                <textarea name="content" placeholder="Ingrese su contenido"></textarea>
            </label>

            <button type="submit"> Crear post </button>
            <a href="/category/"> Volver </a>
        </form>
    </div>
</x-app-layout>