<x-app-layout>
    <form action="/actualizar-categorias-juego" method="POST">
        @csrf


        <h1 class="dark:text-white text-center font-extrabold uppercase mt-5 text-3xl">ESPECIFICA LAS CATEGORÍAS DEL JUEGO</h1>
        

        <div class="m-10 md:flex flex-col md:flex-row md:justify-center items-center gap-5">
            @forelse ($categorias as $categoria)

                @php
                    $checked=false;
                @endphp

                @foreach ($categorias_juego as $categoria_juego)

                    @if($categoria->id === $categoria_juego->id)
                        @php
                            $checked=true;
                        @endphp
                    
                    @endif
                    
                @endforeach

                <div class="flex items-center justify-between md:justify-center gap-2 mb-3">
                    <h1 class="dark:text-white">{{$categoria->categoria}}</h1>
                    <input type="checkbox" name="nuevas_categorias[]" value="{{$categoria->id}}" {{$checked ? "checked" : ""}}>
                </div>
            @empty
                <h1> VAYA, PARECE QUE NO HAY CATEGORIAS!</h1>
            @endforelse
        </div>

        <input type="hidden" name="juego" value="{{$juego->id}}">

        <button class="items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mt-2 w-full">Guardar cambios</button>
        
    </form>
</x-app-layout>