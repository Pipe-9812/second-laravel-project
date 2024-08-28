<x-app-layout title="Contacto">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contactenos') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="flex items-center text-3xl font-extrabold mb-4 dark:text-white">
                        Contactanos
                    </h1>

                    <form method="POST" action="{{ route('contact-us.store') }}" style="display: flex; flex-direction:column; gap: 1rem;">

                        @csrf

                        <div>
                            <x-input-label for="course-name" :value="__('Nombre')" />
                            <x-text-input id="course-name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        {{-- <div style="display: flex; flex-direction:column; gap: 0.3rem;">
                            <label for="course-name">Nombre:</label>
                            <input id="course-name" type="text" name="name" value="{{ old('name') }}">

                            @error('name')
                                <div style="color: red; font-weight: bold;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        {{-- <div style="display: flex; flex-direction:column; gap: 0.3rem;">
                            <label for="email">Correo Electrónico:</label>
                            <input id="email" type="text" name="email" value="{{ old('email') }}">

                            @error('email')
                                <div style="color: red; font-weight: bold;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- <div style="display: flex; flex-direction:column; gap: 0.3rem;">
                            <label for="content">Mensaje:</label>
                            <textarea id="content" name="message" rows="5">{{ old('content') }}</textarea>

                            @error('message')
                                <div style="color: red; font-weight: bold;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div>
                            <x-input-label for="content" :value="__('Mensaje')" />
                            <x-textarea id="content" class="block mt-1 w-full" type="textarea" name="message" :value="old('message')"  autofocus />
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        </div>

                        <div class="flex justify-end mt-4">
                            <x-primary-button>
                                {{ __('Enviar Mensaje') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>