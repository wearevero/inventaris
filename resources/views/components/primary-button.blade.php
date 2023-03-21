<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 tracking-wider font-montreal text-md transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
