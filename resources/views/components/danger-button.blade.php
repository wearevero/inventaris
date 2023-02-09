<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-rose-500 border border-transparent rounded-md font-semibold text-md font-montreal text-ivory uppercase tracking-wide hover:bg-rose-300 active:bg-rose-500 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
