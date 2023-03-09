@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 tracking-wider uppercase border-vero font-basement text-sm font-medium leading-5 text-vero dark:text-oranged focus:outline-none focus:border-oranged transition duration-150 ease-in-out' : 'inline-flex items-center px-1 pt-1  tracking-wider uppercase border-transparent text-sm font-medium font-basement leading-5 text-gray-700 hover:text-vero hover:border-vero focus:outline-none focus:text-vero focus:border-vero transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
