{{-- <x-app-layout title="Crear">
    <h1>
        Crear Nuevo Curso
    </h1>

    <a href="{{ route('courses.index') }}">⬅️ Volver</a>

    <form method="POST" action="{{ route('courses.store') }}" style="display: flex; flex-direction:column; gap: 1rem; width: 30%; margin-top: 1rem;">

        @csrf

        <div style="display: flex; flex-direction:column; gap: 0.3rem;">
            <label for="course-name">Nombre del Curso</label>
            <input id="course-name" type="text" name="name" value="{{ old('name') }}">

            @error('name')
                <div style="color: red; font-weight: bold;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="display: flex; flex-direction:column; gap: 0.3rem;">
            <label for="course-slug">Identificador URL para el curso (Slug)</label>
            <input id="course-slug" type="text" name="slug" value="{{ old('slug') }}">

            @error('slug')
                <div style="color: red; font-weight: bold;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="display: flex; flex-direction:column; gap: 0.3rem;">
            <label for="course-description">Descripción</label>
            <textarea id="course-description" name="description" rows="5">{{ old('description') }}</textarea>

            @error('description')
                <div style="color: red; font-weight: bold;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="display: flex; flex-direction:column; gap: 0.3rem;">
            <label for="course-category">Categoría</label>
            <input id="course-category" type="text" name="category" value="{{ old('category') }}">

            @error('category')
                <div style="color: red; font-weight: bold;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button style="padding-block: .5rem; margin-top: 1rem;">
            Crear
        </button>
    </form>
</x-app-layout> --}}

<x-app-layout title="Crear">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center gap-2">
            <x-link-light route="{{ route('courses.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                  </svg>
            </x-link-light>

            Crear Nuevo Curso
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="flex items-center text-3xl font-extrabold mb-4 dark:text-white">
                        Nuevo Curso
                    </h1>

                    <form method="POST" action="{{ route('courses.store') }}" style="display: flex; flex-direction:column; gap: 1rem;">

                        @csrf

                        <div>
                            <x-input-label for="course-name" :value="__('Nombre del Curso:')" />
                            <x-text-input id="course-name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="course-slug" :value="__('Identificador URL para el curso (Slug)')" />
                            <x-text-input id="course-slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" />
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="course-category" :value="__('Categoría')" />
                            <x-text-input id="course-category" class="block mt-1 w-full" type="text" name="category" :value="old('category')" />
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="course-description" :value="__('Descripción')" />
                            <x-textarea id="course-description" class="block mt-1 w-full" type="textarea" name="description" :value="old('description')" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex justify-end mt-4">
                            <x-primary-button>
                                {{ __('Crear') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>