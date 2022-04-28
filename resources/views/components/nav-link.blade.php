@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-white inline-flex items-center px-3 py-1 text-sm font-quick font-bold leading-5 text-purple-200 focus:outline-none transition border-b-black'
            : 'bg-white inline-flex items-center px-3 py-1 text-sm font-quick font-bold leading-5 text-purple-200 focus:outline-none transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
