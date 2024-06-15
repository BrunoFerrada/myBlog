<x-app-layout>
    <div class="bg-gray-800 rounded-lg w-96 p-6 mx-auto my-8">
        <h1 class="text-gray-100 text-center">Nuevo post</h1>
        <form action="/category" method="POST" class="space-y-4 mx-auto">

            @csrf
            <div>
                <label>
                    <input type="text" name="title" placeholder="Ingrese un título" class="w-full px-3 py-2 rounded-md border bg-gray-900 border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-100">
                </label>
            </div>

            <div>
                <label>
                    <textarea name="content" placeholder="Ingrese su contenido" class="w-full px-3 py-2 rounded-md border bg-gray-900 border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-100"></textarea>
                </label>
            </div>
            <div class="mb-6">
                        <label for="idCategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
                        <select id="idCategory" name="idCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-select w-full" id="idCategory" name="idCategory" required>
                            <option value="" disabled selected>Selecciona una categoría</option>
                            @foreach ($colCategories as $category)
                                <option value="{{ $category->idCategory }}">{{ $category->nameCategory }}</option>
                            @endforeach
                        </select>
                    </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-gray-100 px-4 py-2 rounded-md hover:bg-blue-600"> Crear post </button>
                <a href="/category/" class="bg-blue-500 text-gray-100 px-4 py-2 rounded-md hover:bg-blue-600"> Volver </a>
            </div>
        </form>
    </div>
</x-app-layout>