<x-app-layout>
    <div class="pt-6">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Todos los posts') }}
            </h2>
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