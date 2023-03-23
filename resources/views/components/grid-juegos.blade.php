<div>

    @php
        $tipo="juego";
    @endphp
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-5">

        @if (auth()->user()->admin===1)
        <div class="">
            <a href="/nuevo-juego" class="border-black border-2 dark:border-gray-400">
                <p class="text-center py-40 font-extrabold text-5xl">CREAR NUEVO JUEGO</p>
            </a>
        </div>
        @endif

        @foreach ($juegos as $juego)
        
            <div>
                <div class="relative">
                    <a href="{{ auth()->user()->admin===0 ? '/juego/'.$juego->id : '/edit/'.$juego->id}}">
                        <img src="{{'/img/juegos/'.$juego->imagen}}" alt="{{'Imagen '.$juego->imagen}}">
                        <h1 class="dark:text-white hover:text-amber-500 text-center font-bolder text-2xl"> {{$juego->juego}} </h1>
                    </a>

                    
                    @if (auth()->user()->admin===0)
                        <div>
                            <livewire:boton-deseados :juego="$juego" />
                        </div>

                       

                    @else
                        
                        <div>
                            <livewire:boton-eliminar :tipo="$tipo" :juego="$juego" />
                        </div>

                        <form action="{{route('juego-categorias.edit',$juego->id)}}">
                            
                            
                            <button class="items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mt-2 w-full">ESTABLECER CATEGORIAS</button>
                        </form>
                    @endif
                        
                </div>


            </div>
        
        @endforeach
    </div>
</div>