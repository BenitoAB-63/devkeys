<x-app-layout>

    @php
        $tipo="categoria";
    @endphp

    <h1 class="text-center font-extrabold text-3xl mt-5 dark:text-white">Categorías</h1>

    
    @if (session()->has('success'))
        <p class="text-green-400 m-2 font-bold uppercase text-center">Categoria Actualizada</p>
    @endif

    @if(session()->has('created'))
        <p class="text-green-400 m-2 font-bold uppercase text-center">Categoria Creada </p>
    @endif

<div class="grid md:grid-cols-3 lg:grid-cols-4 gap-5">

    <div class="m-3 p-3 rounded-md rounded-white">
        <h1 class="dark:text-white text-indigo-900 text-center font-extrabold"> Nueva Categoría</h1>
        <livewire:crear-categoria />
    </div>



    @forelse ($categorias as $categoria)

        
            

             

                    <div class="dark:bg-white bg-indigo-900 m-3 p-3 rounded-md">
                        
                        <livewire:actualizar-categoria :categoria="$categoria" >
                        
                    </div>
               
        
    @empty
        <h1 class="text-center font-extrabold text-3xl mt-5 dark:text-white">No hay categorías por el momento</h1>
    @endforelse
</div>
    
</x-app-layout>