@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900
focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out bg-gray-200 pr-24 pb-2 pt-2 pl-2 rounded'
: 'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800
dark:hover:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
