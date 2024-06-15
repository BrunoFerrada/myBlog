<x-app-layout>
    <div class="pt-6">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Todos los posts') }}
            </h2>
            <form method="GET" action="{{ route('category.index') }}" >
                <div class="flex px-4 ">
                    <select name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-select w-48" id="idCategory" name="idCategory">
                        <option value="">Todas las categorías</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->idCategory }}" {{ request('category_id') == $category->idCategory ? 'selected' : '' }}>
                        {{ $category->nameCategory }}
                        </option>
                        @endforeach
                    </select>
                    <div class="px-4">
                        <button type="submit" class="text-blue-600 font-semibold rounded-full border border-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 px-5 py-2">Filtrar</button>
                    </div>
                </div>
            </form>
        </x-slot>
        
            <div>
                <ul>
                    @foreach ($posts as $post)
                    <li class="bg-gray-800 text-gray-100 mt-5 ml-5 mr-5 p-2 rounded-full">
                        <button class="w-full ">
                            <a href="/category/show/{{$post->id}}" class="ml-5">
                                {{$post->title}}
                            </a>
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
    </div>
</x-app-layout>