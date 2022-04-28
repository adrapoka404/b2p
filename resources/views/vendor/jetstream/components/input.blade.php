@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-2 border-red-800 bg-gray-input focus:bg-white rounded-full']) !!}>
