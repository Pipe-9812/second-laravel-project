@props(['title', 'color' => 'blue'])

@php
$blue = "bg-blue-100 border-blue-500 text-blue-700 dark:bg-blue-700/50 dark:border-blue-200 dark:text-blue-200 dark:shadow-xl dark:shadow-blue-500/50";
$red  = "bg-red-100 border-red-500 text-red-700 dark:bg-red-600/50 dark:border-red-200 dark:text-red-200 dark:shadow-xl dark:shadow-red-500/60";

switch ($color) {
    case 'blue':
        $class = $blue;
        break;

    case 'red':
        $class = $red;
        break;

    default:
        $class = $blue;
        break;
}
@endphp

<article {{ $attributes->merge(['class' => "border-l-4 border-1 p-4 mb-6 rounded-r-lg shadow-lg $class" ]) }} role="alert">
    <h1 class="font-bold text-xl">
        {{ $title }}
    </h1>

    {{ $content }}
</article>
