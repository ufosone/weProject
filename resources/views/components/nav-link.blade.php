<a {{ $attributes->merge([
    'class' => 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out']
    ) }}>
    {{ $slot }}
</a>
