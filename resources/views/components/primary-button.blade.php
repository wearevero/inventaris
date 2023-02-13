<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 uppercase tracking-wider font-montreal text-lg transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
