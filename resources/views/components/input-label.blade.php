@props(['value'])

<label
    {{ $attributes->merge(['class' => 'block font-montreal tracking-wider text-md text-geistWhite']) }}>
    {{ $value ?? $slot }}
</label>
