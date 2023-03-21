@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 tracking-wide uppercase border-vero font-basement text-md text-geistWhite focus:outline-none transition duration-150 ease-in-out' : 'inline-flex items-center px-1 pt-1  tracking-wide uppercase border-transparent text-md font-basement text-gray-400 hover:text-geistWhite hover:border-vero focus:outline-none focus:text-geistWhite focus:border-geistWhite transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
