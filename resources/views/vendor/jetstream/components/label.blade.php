@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-regular font-cairo text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
