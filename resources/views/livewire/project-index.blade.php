<div class="py-12 grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 xs:grid-cols-1 auto-rows-max ">
    <!-- component -->
    <x-link-new-project href="{{ route('projects.create') }}">
        {{ __('Crear proyecto') }}
    </x-nav-link>
    @if ($projects->count() == 0)
        <x-no-project />
    @else
        <x-card-project />
        <x-card-project />
        <x-card-project />
    @endif



</div>
