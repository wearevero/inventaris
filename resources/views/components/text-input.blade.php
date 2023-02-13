@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'text-black border-gray-300 bg-transparent font-montreal my-4 text-lg dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-vero dark:focus:border-indigo-600 focus:ring-vero dark:focus:ring-indigo-600 rounded-md shadow-sm',
]) !!}>
