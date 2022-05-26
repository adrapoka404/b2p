<div class="relative">
    <div class="fixed top-0 left-0 right-0 shadow-md shadow-gray">
        <div class="w-full bg-white mx-auto py-6 px-4 sm:px-6 lg:px-8  lg:flex">

            <div class="w-full lg:w-1/4 h-20 lg:inline-flex ">
                <x-jet-application-logo />
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class=" hidden sm:block w-full lg:w-2/4  text-center lg:-my-px lg:inline-flex justify-items-center">
                @if (Route::has('login'))
                    <div class="hidden  py-4 sm:block">
                        <x-jet-nav-link href="#funciona" :active="request()->routeIs('dashboard')">
                            {{ __('¿Cómo funciona?') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="#proyectos" :active="request()->routeIs('dashboard')">
                            {{ __('Proyectos') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="#somos" :active="request()->routeIs('dashboard')">
                            {{ __('¿Quiénes somos?') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="#enqueinvierte" :active="request()->routeIs('dashboard')">
                            {{ __('¿En qué se invierte?') }}
                        </x-jet-nav-link>
                        
                    </div>
                @endif

            </div>
            <div class="hidden lg:inline-flex lg:w-1/4 items-center ">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm text-purple-200 dark:text-gray-500 underline hover:font-bold">{{__('Dashboard')}}</a>
            @else
                <a href="{{ route('login') }}"
                    class="text-sm text-purple-200 dark:text-gray-500 underline hover:font-bold">{{__('Cuenta')}}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-purple-200 dark:text-gray-500 underline hover:font-bold">{{__('Registro')}}</a>
                @endif
            @endauth
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Aqui los navs link') }}
                </x-jet-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm text-purple-200 dark:text-gray-500 underline hover:font-semibold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-sm text-purple-200 dark:text-gray-500 underline hover:font-semibold">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-purple-200 dark:text-gray-500 underline hover:font-semibold">Register</a>
                        @endif
                    @endauth
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('dashboard') }}"
                        :active="request()->routeIs('dashboard')">
                        {{ __('name nav') }}
                    </x-jet-responsive-nav-link>

                </div>
            </div>
        </div>

    </div>
    <div>
        <div>
            <img src="..." />
            <strong>Andrew Alfred</strong>
        </div>
        <div>
            <img src="..." />
            <strong>Debra Houston</strong>
        </div>
        <!-- ... -->
    </div>
</div>

<div class=" h-96 w-full bg-gradient-to-r from-red-300 via-purple-200 to-blue-300">
    <div
        class=" font-light text-4xl sm:text-6xl lg:text-8xl content-center text-white mx-auto text-center w-2/3 py-20  font-quick">
        Haz crecer
        tu negocio
        <div class="text-right">
            <a href="{{ route('dashboard') }}"
                class="bg-purple-200 rounded-full px-5 py-3 text-sm font-quick font-medium leading-5 text-white hover:text-purple-200 hover:font-semibold hover:bg-white focus:outline-none focus:text-white transition">
                {{ __('Invertir') }}
            </a>

        </div>
    </div>

</div>
