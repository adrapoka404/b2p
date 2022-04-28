<x-slot name="table">
    <table class="table text-md">
        <thead>
            <tr>
                <th colspan="4" class="text-right">
                    @can('roles.create')
                        <x-link-cancel href="{{ route('roles.create') }}">
                            {{ __('Agregar nuevo Rol') }}
                            </x-nav-link>
                        @endcan
                </th>
            </tr>
            @if ($roles->count() == 0)
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
            @foreach ($roles as $rol)
                <tr class="hover:border-b-white border-b border-gray py-2 h-10">
                    <td class="font-light my-2">
                        {{ $rol->name }}
                    </td>
                    <td class="table-td-action font-light my-2 text-center ">
                        @can('roles.edit')
                            <a href="{{ route('roles.edit', $rol) }}"
                                class=" bg-file text-white rounded-full m-2 py-1 px-2 inline">{{ __('Editar') }}</a>
                        @endcan
                        @can('roles.destroy')
                            <form action="{{ route('roles.destroy', $rol) }}" method="POST"
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
    {{ $roles->links() }}
    @endif
</x-slot>
