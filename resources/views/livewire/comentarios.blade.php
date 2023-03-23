<div>
    <div class="bg-white mx-8 rounded-md">

        @forelse ($comentarios as $comentario)
            <div class="p-5 border border-b-gray-600 border-b-4">
                <h2 class="font-extrabold">{{$comentario->users->name}}</h2>
                <p class="pt-2 pl-2 {{ substr($comentario->comentario,0,1)==='@' ? "font-extrabold" : "" }}">{{$comentario->comentario}}</p>
            </div>
        @empty
            <p class="text-black font-bold text-center p-3">Nadie ha comentado aún.</p>
        @endforelse

        <div class="p-5 border border-b-gray-600 border-b-4">

            <form wire:submit.prevent="nuevoComentario" method="POST">
                @csrf
                <label for="comentario" class="text-black">Escribe tu comentario</label>
                
                <textarea id="comentario" wire:model="comentario" class="w-full border-gray-300">

                </textarea>

                @error('comentario') <p class="text-red-600">El comentario es obligatorio</p> @enderror

                <button type="submit" class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700  active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150 mt-2 w-full md:w-36">Enviar</button>
            </form>
        </div>
    </div>
</div>
