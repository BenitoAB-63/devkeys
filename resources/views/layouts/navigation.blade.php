@php
    use App\Models\Categoria;
    $categorias=Categoria::all();
@endphp
<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    @if (auth()->user()->admin===1)
                        <a href="{{ route('admin') }}">
                            <h1 class="font-extrabold text-4xl dark:text-gray-400 text-indigo-800">DevKeys <h1><p class="font-normal text-xl dark:text-gray-400 text-indigo-800 mt-6 ml-1">ADMIN</p>
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}">
                            <h1 class="font-extrabold text-4xl dark:text-gray-400 text-indigo-800">DevKeys<h1>
                        </a>
                    @endif
                    
                </div>

                @if (auth()->user()->admin===1)

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        
                        <x-nav-link :href="'/juegos'" :active="request()->is('juegos')">
                            Juegos
                        </x-nav-link>
                        
                        <x-nav-link :href="'/categorias'" :active="request()->is('categorias')">
                            Categorias
                        </x-nav-link>
                        
                    </div>
                    
                @else

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        @foreach ($categorias as $categoria)
                            <x-nav-link :href="'/categoria/'.$categoria->id" :active="request()->is('categoria/'.$categoria->id)">
                                {{ __($categoria->categoria) }}
                            </x-nav-link>
                        @endforeach
                        
                    </div>
                    
                @endif
                
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">

                        <div class="w-10 mr-3">
                            @if(Auth::user()->img)
                            
                                <img src="/img/usuarios/{{Auth::user()->img}}" alt="" class="rounded-full mr-5 border-green-500 border-2" >
                            

                            @else

                                <p class="rounded-full w-10 h-10 mr-5 border-green-500 border-2 uppercase font-extrabold text-white bg-gray-800 text-center text-3xl "> {{substr(Auth::user()->name,0,1)}} </p>

                            @endif

                        </div>
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        @if (auth()->user()->admin===0)
                            <x-dropdown-link :href="route('deseados.show')">
                                {{ __('Lista de Deseados') }}
                            </x-dropdown-link>
                        @endif

                       


                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex justify-between items-center dark:border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div>

                    @if(auth()->user()->img)
                        <img src="/img/usuarios/{{Auth::user()->img}}" alt="" class="rounded-full w-16 mr-5 border-green-500 border-2" >

                    @else

                        <p class="rounded-full w-16 h-16 mr-5 border-green-500 border-2 uppercase font-extrabold text-white bg-gray-800 text-center text-5xl pt-1"> {{substr(Auth::user()->name,0,1)}} </p>

                    @endif
                    
                </div>
            </div>

            @if (auth()->user()->admin===0)
                <div class="mt-3 space-y-1">
                    @foreach ($categorias as $categoria)
                            <x-responsive-nav-link :href="'/categoria/'.$categoria->id" :active="request()->is('categoria/'.$categoria->id)">
                                {{ __($categoria->categoria) }}
                            </x-responsive-nav-link>
                    @endforeach


                    
                </div>

            @else

            <div class="mt-3 space-y-1">

                
                        <x-responsive-nav-link :href="'/juegos'" :active="request()->is('juegos')">
                            Juegos
                        </x-responsive-nav-link>
                
                        <x-responsive-nav-link :href="'/categorias'" :active="request()->is('categorias')">
                            Categorias
                        </x-responsive-nav-link>


                
            </div>

            @endif



            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">

                @if (auth()->user()->admin===0)
                    <!-- Deseados -->
                    <x-responsive-nav-link :href="route('deseados.show')">
                        {{ __('Lista de Deseados') }}
                    </x-responsive-nav-link>
                @endif
                <!-- Profile -->
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Editar Perfil') }}
                    </x-responsive-nav-link>
              

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
    
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
        </div>

            
            </div>
        </div>


</nav>
