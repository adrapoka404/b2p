<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6 mt-10']) }}>
        <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }}</x-slot>
        </x-jet-section-title>

        <div class="mt-5 md:mt-0 md:col-span-2 bg-gray-input">
            <div class="px-4 py-5 bg-gray-input sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-flow-row">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-center sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </div>
    </div>
</div>
