<div>

    @error('categoria')
        <p class="text-red-500">El nombre de la categoría es obligatorio</p>
    @enderror
    <form wire:submit.prevent="nuevaCategoria" method="POST">
        <div><x-text-input wire:model="categoria" class="dark:text-indigo-900 text-white text-center font-extrabold" type="text" value="{{old('categoria')}}" placeholder="Nombre Categoría"/></div>



    <div>
        <input type="submit" value="Añadir Categoria" class="w-full bg-indigo-900 text-white text-center font-extrabold p-2 rounded-md cursor-pointer" />
    </div>

            

    </form>
</div>
