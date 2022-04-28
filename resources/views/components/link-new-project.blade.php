@props(['active'])

@php
$classes =  'bg-green rounded-full inline-flex items-center px-3 py-2 my-2 text-sm font-quick font-bold leading-5 text-white focus:outline-none focus:border-purple transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
