@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-white border-gray-300 bg-transparent my-4 text-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-oranged dark:focus:border-indigo-600 focus:ring-oranged dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
