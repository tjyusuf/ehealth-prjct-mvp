<div>
    <button {{ $attributes->merge(['class' => 'justify-center px-4 py-2 text-sm font-medium text-white bg-primary border border-transparent rounded-md hover:bg-primary focus:outline-none focus:border-primary-dark focus:ring-primary active:bg-primary-dark transition duration-150 ease-in-out', 'value' => 'submit']) }} >
        {{ $slot }}
    </button>
</div>