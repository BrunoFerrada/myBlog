<x-app-layout>
    <div class="pt-6">
        <h1 class="text-gray-100 text-center bg-gray-800 p-3">Todos los posts</h1>
            <div>
                <ul>
                    @foreach ($posts as $post)
                    <li class="bg-gray-800 text-gray-100 mt-5 ml-5 mr-5 rounded-full">
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