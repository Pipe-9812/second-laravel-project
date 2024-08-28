{{-- <x-app-layout :title="'Curso '.$course->name">
    <h1>
        Pagina del curso: {{ $course->name }}
    </h1>

    <a href="{{ route('courses.index') }}">⬅️ Volver a Cursos</a>

    <p>
        <b>Identificador URL (slug): </b>{{ $course->slug }}
    </p>

    <p>
        <b>Categoría: </b>{{ $course->category }}
    </p>

    <p>
        <b>Descripción:</b><br>
        {{ $course->description }}
    </p>

    <a href="{{ route('courses.edit', $course) }}">Editar Curso ✍🏻</a>

    <form action="{{ route('courses.destroy', $course) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar ❌</button>
    </form>
</x-app-layout> --}}


<x-app-layout :title="'Curso '.$course->name">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center gap-2">
            <x-link-light route="{{ route('courses.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </x-link-light>

            Detalles del Curso
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="flex items-center text-3xl font-extrabold mb-4 dark:text-white">
                        {{ $course->name }}
                    </h1>

                    <ul class="font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-5">
                        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                            <b class="block mb-1">Identificador URL (Slug):</b>
                            <span class="block font-thin text-gray-500">{{ $course->slug }}</span>
                        </li>

                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                            <b class="block mb-1">Categoría:</b>
                            <span class="block font-thin text-gray-500">{{ $course->category }}</span>
                        </li>

                        <li class="w-full px-4 py-2 rounded-b-lg">
                            <b class="block mb-1">Descripción:</b>
                            <span class="block font-thin text-gray-500">{{ $course->description }}</span>
                        </li>
                    </ul>

                    <div class="flex justify-end gap-3">
                        {{-- <a href="{{ route('courses.edit', $course) }}">Editar Curso ✍🏻</a> --}}

                        <x-link-light class="border shadow-sm md:shadow-md">
                            <form action="{{ route('courses.destroy', $course) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar ❌</button>
                            </form>
                        </x-link-light>

                        <x-link-light route="{{ route('courses.edit', $course) }}" class="border shadow-sm md:shadow-md">
                            Editar Curso ✍🏻
                        </x-link-light>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>











