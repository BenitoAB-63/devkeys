<x-app-layout>
        <h1 class="text-center font-extrabold text-3xl mt-5 dark:text-white">Tu Lista de Deseados</h1>
        @if($juegos)
            <div class=" mx-5">
                <x-grid-juegos :juegos="$juegos"/>
            </div>
        @else
            <h1 class="font-bolder text-amber-400 text-center mt-2">Vaya, parece que todavía no tienes ningún juego en tu Lista de deseados. Mira nuestro catálogo <a href="{{route('dashboard')}}" class="text-green-500"> AQUÍ </a> </h1>
        @endif
</x-app-layout>