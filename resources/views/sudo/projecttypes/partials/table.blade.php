<x-slot name="table">
    <table class="table text-md">
        <thead>
            <tr>
                <th colspan="4" class="text-right">
                    @can('projecttypes.create')
                        <x-link-cancel href="{{ route('projecttypes.create') }}">
                            {{ __('Agregar tipo de proyecto') }}
                            </x-nav-link>
                        @endcan
                </th>
            </tr>
            @if ($projecttypes->count() == 0)
                <tr>
                    <th colspan="4" class="text-right">
                        {{ __('Aun no hay datos en el catalogo') }}
                    </th>
                </tr>
            @else
                <tr class="bt-white shadow-sm shadow-white">
                    <th class="text-left">{{ __('Nombre') }}</th>
                    <th class="text-left">{{ __('Estado') }}</th>
                    <th class="text-center">{{ __('Acciones') }}</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($projecttypes as $ptypes)
                <tr class="hover:border-b-white border-b border-gray py-2 h-10">
                    <td class="font-light my-2">
                        {{ $ptypes->name }}
                    </td>
                    <td class="font-light my-2">
                        @if ($ptypes->status != 0)
                            {{__('Activo')}}
                        @else
                        {{__('Desactivado')}}
                        @endif
                        
                    </td>
                    <td class="table-td-action font-light my-2 text-center">
                        @can('projecttypes.edit')
                            <a href="{{ route('projecttypes.edit', $ptypes) }}"
                                class=" bg-file text-white rounded-full m-2 py-1 px-2 inline">
                                {{ __('Editar') }}
                            </a>
                        @endcan
                        @can('projecttypes.destroy')
                            <form action="{{ route('projecttypes.destroy', $ptypes) }}" method="POST"
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
    {{ $projecttypes->links() }}
    @endif
</x-slot>
