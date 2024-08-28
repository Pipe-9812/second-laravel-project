@props(['title', 'description', 'route'])

<div class="w-96 flex flex-col border border-gray-200 rounded-2xl overflow-auto shadow dark:bg-gray-800 dark:border-gray-700 dark:shadow-2xl dark:shadow-blue-500/50 transition duration-200 hover:border-sky-600 hover:bg-slate-100">
    <a href="{{ $route }}" class="px-2 pt-2">
        <div class="flex items-center justify-center w-full h-52 rounded-lg overflow-hidden">
            <img class="w-full" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
        </div>
    </a>

    <div class="p-5 grow flex flex-col justify-between">
        <div>
            <a href="{{ $route }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $title }}
                </h5>
            </a>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ $description }}
            </p>
        </div>

        <div class="flex justify-end">
            <a href="{{ $route }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-900">
                Más Información

                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

    </div>
</div>