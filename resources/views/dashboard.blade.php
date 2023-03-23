<x-app-layout>

 

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session()->has('success'))
                        <p class="bg-green-400 p-3 text-white font-bold uppercase text-center mx-auto my-4">Nuevo Juego Añadido</p>
                    @endif

                    <h1 class="text-center font-extrabold text-3xl">TODOS LOS JUEGOS</h1>

                    <x-grid-juegos :juegos="$juegos" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
