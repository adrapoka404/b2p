<x-slot name="table">
    <table class="table text-md">
        <thead>
            <tr>
                <th colspan="4" class="text-right">
                    @can('users.create')
                        <x-link-cancel href="{{ route('users.create') }}">
                            {{ __('Agregar nuevo Usuario') }}
                            </x-nav-link>
                        @endcan

                </th>
            </tr>
            @if ($usuarios->count() == 0)
                <tr>
                    <th colspan="4" class="text-right">
                        {{ __('Aun no hay datos en el catalogo') }}
                    </th>
                </tr>
            @else
                <tr class="bt-white shadow-sm shadow-white">
                    <th class="text-left">{{ __('Nombre') }}</th>
                    <th class="text-left">{{ __('Correo') }}</th>
                    <th class="text-center">{{ __('Acciones') }}</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr class="hover:border-b-white border-b border-gray py-2 h-10">
                    <td class="font-light my-2">
                        {{ $usuario->name }}
                    </td>
                    <td class="font-light my-2">
                        {{ $usuario->email }}
                    </td>
                    <td class="table-td-action font-light my-2 text-center">
                        @can('users.edit')
                            <a href="{{ route('users.edit', $usuario) }}"
                                class=" bg-file text-white rounded-full m-2 py-1 px-2 inline">{{ __('Editar') }}</a>
                        @endcan
                        @can('users.destroy')
                            <form action="{{ route('users.destroy', $usuario) }}" method="POST" class="w-full max-w-sm inline">
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
    {{ $usuarios->links() }}
    @endif
</x-slot>
