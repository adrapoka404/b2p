<div class="py-12 grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 xs:grid-cols-1 auto-rows-max ">
    <!-- component -->
    <div>
        <x-link-new-project href="{{ route('projects.create') }}">
            {{ __('Crear proyecto') }}
            </x-nav-link>
    </div>
    @if ($projects->count() == 0)
        <x-no-project />
    @else
        @foreach ($projects as $project)
        <x-card-project>
                <x-slot name='project_image'>{{ $project->multimedia[0]['multimedia1'] }}</x-slot>
                <x-slot name='project_user'>{{ $project->user[0]['name'] }}</x-slot>
                <x-slot name='project_name'>{{ $project->name }}</x-slot>
                <x-slot name='project_sumary'>{{ $project->investment_breakdown }}</x-slot>
                <x-slot name='project_goal'>{{ $project->goal }}</x-slot>
                <x-slot name='project_returns'>8.0</x-slot>
                <x-slot name='project_tradename'>{{ $project->company[0]['tradename'] }}</x-slot>
            </x-card-project>
        @endforeach

    @endif



</div>
