{{-- <x-layouts.app title="Cursos">
    <h1>
        Bienvenido a la pagina CURSOS
    </h1>

    <a href="{{ route('courses.create') }}">Crear Curso ➕</a>

    <ul>
        @foreach ($courses as $course)
            <li style="margin-bottom: 1rem">
                <a href="{{ route('courses.show', $course) }}">
                    {{ $course->name }}
                </a>
            </li>
        @endforeach
    </ul>

    {{$courses->links()}}
</x-layouts.app> --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Cursos') }}
            </h2>

            <a href="{{ route('courses.create') }}" class="border-b pb-1 font-regular text-xl text-gray-800 dark:text-gray-200 leading-tight">Crear Curso ➕</a>
        </div>
    </x-slot>

    <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto p-10 px-4 sm:px-6 lg:px-8">
        @foreach ($courses as $course)
            {{-- <li style="margin-bottom: 1rem">
                <a href="{{ route('courses.show', $course) }}">
                    {{ $course->name }}
                </a>
            </li> --}}

            <x-card-courses
                title="{{ $course->name }}"
                description="{{ $course->description }}"
                route="{{ route('courses.show', $course) }}"
            >
            </x-card-courses>
        @endforeach

        <div class="w-full backdrop-blur-md bg-white/80 mx-2 px-5 py-3 border rounded-xl shadow-lg sticky bottom-2">
            {{ $courses->links() }}
        </div>
    </div>

</x-app-layout>
