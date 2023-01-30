@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 tracking-wider uppercase border-oranged font-basement dark:border-oranged text-sm font-medium leading-5 text-oranged dark:text-oranged focus:outline-none focus:border-oranged transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  tracking-wider uppercase border-transparent text-sm font-medium font-basement leading-5 text-white dark:text-white hover:text-oranged dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
