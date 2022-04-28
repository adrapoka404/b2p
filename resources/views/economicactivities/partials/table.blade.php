<x-slot name="table">
    <table class="table text-md">
        <thead>
            <tr>
                <th colspan="4" class="text-right">
                    @can('economicactivities.create')
                        <x-link-cancel href="{{ route('economicactivities.create') }}">
                            {{ __('Agregar nueva actividad economica') }}
                            </x-nav-link>
                        @endcan
                </th>
            </tr>
            @if ($actividades->count() == 0)
                <tr>
                    <th colspan="4" class="text-right">
                        {{ __('Aun no hay datos en el catalogo') }}
                    </th>
                </tr>
            @else
                <tr class="bt-white shadow-sm shadow-white">
                    <th class="text-left">{{ __('Nombre') }}</th>
                    <th class="text-center">{{ __('Acciones') }}</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($actividades as $actividad)
                <tr class="hover:border-b-white border-b border-gray py-2 h-10">
                    <td class="font-light my-2">
                        {{ $actividad->name }}
                    </td>
                    <td class="table-td-action font-light my-2 text-center">
                        @can('economicactivities.edit')
                            <a href="{{ route('economicactivities.edit', $actividad) }}"
                                class=" bg-file text-white rounded-full m-2 py-1 px-2 inline">{{ __('Editar') }}</a>
                        @endcan
                        @can('economicactivities.destroy')
                            <form action="{{ route('economicactivities.destroy', $actividad) }}" method="POST"
                                class="w-full max-w-sm inline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="{{ __('Quitar') }}"
                                    class=" bg-red-300 text-white rounded-full m-2 py-1 px-2">
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $actividades->links() }}
    @endif
</x-slot>
