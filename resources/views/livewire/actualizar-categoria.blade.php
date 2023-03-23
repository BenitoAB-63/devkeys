<div>
    <form wire:submit.prevent="actualizarCategoria" method="POST">

        @error('nombre_categoria')
        <p class="text-red-500">El nombre de la categoria es obligatorio</p>
        @enderror

        <div><x-text-input wire:model="nombre_categoria" class="dark:text-indigo-900 text-white text-center font-extrabold" type="text" value="{{$categoria->categoria ?? old('categoria')}}" /></div>

        <div class="flex justify-between items-center">

            <div><input type="submit" value="Actualizar" class="bg-indigo-900 text-white text-center font-extrabold p-2 rounded-md cursor-pointer" /></div>
            {{-- boton eliminar --}}

            <livewire:boton-eliminar :tipo="$categoria" :categoria="$categoria">
        </div>
    </form>
</div>
