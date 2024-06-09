<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 dark:text-gray-100 p-6 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    {{ __("Iniciaste sesión!") }}
                </div>
                <div class="pt-6">
                    <a href="/profile" class=" bg-blue-500 text-gray-100 px-4 py-2 rounded-md hover:bg-blue-600">Editar perfil</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
