@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'text-geistWhite border-geistWhite bg-gray-600/10 font-montreal my-4 text-md focus:border-geistWhite focus:ring-geistWhite rounded-md',
]) !!}>
