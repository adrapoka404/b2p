<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <div x-data="{
                openTab: 1,
                activeClasses: 'border-l border-t border-r rounded-t text-white bg-gradient-to-t  from-red-300 via-purple-200 to-blue-300',
                inactiveClasses: 'text-blue-500 hover:text-blue-600'
            }" class="p-6 mx-auto w-3/4">
                <ul class="flex w-full  border-b border-blue-500">
                    <li @click="openTab=1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                        <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('General') }}
                        </a>
                    </li>
                    <li @click="openTab=2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                        <a :class="openTab === 2 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('Responsable') }}
                        </a>
                    </li>
                    <li @click="openTab=3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                        <a :class="openTab === 3 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('Direccion') }}
                        </a>
                    </li>
                    <li @click="openTab=4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                        <a :class="openTab === 4 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('Documentos') }}
                        </a>
                    </li>
                    <li @click="openTab=5" :class="{ '-mb-px': openTab === 5 }" class="mr-1">
                        <a :class="openTab === 5 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('Multimedia') }}
                        </a>
                    </li>
                    <li @click="openTab=6" :class="{ '-mb-px': openTab === 6 }" class="mr-1">
                        <a :class="openTab ===6 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('Inversionista') }}
                        </a>
                    </li>
                    <li @click="openTab=7" :class="{ '-mb-px': openTab === 7 }" class="mr-1">
                        <a :class="openTab === 7 ? activeClasses : inactiveClasses"
                            class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            {{ __('Empresa') }}
                        </a>
                    </li>
                </ul>
                <div class="w-full pt-4">
                    {!! Form::open(['route' => 'testprojects.store','atocomplete'=>'off', 'files' => true]) !!}
                    <div x-show="openTab === 1">
                        <div class=" text-xs text-blue-300 ">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit soluta nostrum dolorum veniam
                            voluptatem provident voluptatum itaque placeat possimus ratione, illo molestias sed nam aut
                            consectetur in repellat magnam doloremque!
                        </div>
                        <div class="rounded-t shadow-md shadow-blue-600 mb-5    ">
                            @include('projects.partials.generales')
                        </div>
                    </div>
                    <div x-show="openTab === 2">
                        Formulario del responsable
                        @include('projects.partials.responsable')
                    </div>
                    <div x-show="openTab === 3">
                        Formulario de la direccion
                        @include('projects.partials.direccion')
                    </div>
                    <div x-show="openTab === 4">
                        Formulario para subior documentos
                        @include('projects.partials.documentos')
                    </div>
                    <div x-show="openTab === 5">
                        Formulario para multimedia
                        @include('projects.partials.multimedia')
                    </div>
                    <div x-show="openTab === 6">
                        Para hacerse inversionista
                        @include('projects.partials.inversionista')
                    </div>
                    <div x-show="openTab === 7">
                        Datos de la empresa
                        @include('projects.partials.empresa')
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
