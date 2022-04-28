@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-white rounded-full inline-flex items-center px-3 py-3 text-sm font-quick font-bold leading-5 text-white focus:outline-none focus:border-purple transition'
            : 'bg-white rounded-full inline-flex items-center px-3 py-3 text-sm font-quick font-bold leading-5 text-purple-200 hover:text-white hover:font-bold hover:bg-purple-200 focus:outline-none focus:text-white transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
