@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium tracking-wider uppercase text-md text-white   dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
