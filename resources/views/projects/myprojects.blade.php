<x-app-layout>
    <div class=" w-full mx-auto py-10 sm:px-6 lg:px-8 bg-fixed bg-fondo-projects bg-cover">
        <div
            class=" max-w-7xl  mx-auto hidden sm:flex  bg-white bg-cover rounded-md border-2 border-blue-600 font-cairo ">
            <div class="w-full">
              <div class="flex">
                <div class="w-1/4">Proyecto</div>
                <div class="w-1/4">Creación</div>
                <div class="w-1/4">Estado</div>
                <div class="w-1/4">Acciones</div>

            </div>

            @foreach ($myProjects as $mp)
            <div class="flex">
                <div class="w-1/4">{{$mp->name}}</div>
                <div class="w-1/4">{{$mp->created_at}}</div>
                <div class="w-1/4">{{$mp->completo}}</div>
                <div class="w-1/4">
                <a href="{{route('steepone.edit', $mp->id)}}">Editar</a>
                </div>

            </div>
            @endforeach
        </div>
        </div>
    </div>
</x-app-layout>
