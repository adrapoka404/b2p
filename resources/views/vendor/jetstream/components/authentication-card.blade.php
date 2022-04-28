<div class="min-h-screen flex flex-row sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    
    {{ $bg_izquierda }}
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4  bg-gray-input  h-128 ">
        <div class="flex items-center my-5">
            <div class="w-1/2  text-center text-black font-bold border-b-gray-input border-b-4 hover:border-b-blue-600">
                <a class=" text-bold text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Crear cuenta') }}
                </a>
            </div>
            <div class="w-1/2  text-center text-black font-bold border-b-gray-input border-b-4 hover:border-b-blue-600">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Iniciar sesión') }}
                </a>
            </div>
        </div>
        {{ $slot }}
    </div>
    <div class="w-1/2 sm:max-w-md mt-6 px-6 py-4 bg-gray-input h-128">
        <div>
            {{ $logo }}
        </div>
        <div>Ayuda</div>
    </div>
</div>
