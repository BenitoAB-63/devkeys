<div>
    <div>
        <form method="POST" wire:submit.prevent="nuevoJuego" action="" class="m-10">
            <div>
                <x-input-label for="juego" value="{{__('Juego')}}"/>
                <x-text-input id="juego" wire:model="juego" type="text" value="{{old('juego')}}" placeholder="Nombre del juego" />

                @error('juego')
                    <p class="text-red-500">El nombre del juego es obligatorio. Asegurate de que no sea un juego existente.</p>
                @enderror
            </div>
            
            <div>
                <x-input-label for="imagen" value="{{__('Imagen')}}"/>
                <x-text-input id="imagen" wire:model="imagen" type="file" accept="image/*"/>

                @if($imagen)
                <div class="w-56">
                    <p class="dark:text-white">Imagen</p>
                    <img src="{{$imagen->temporaryUrl()}}" alt="{{'Imagen '.$juego}}">
                </div>
                @endif

                @error('imagen')
                    <p class="text-red-500">La imagen del juego es obligatoria</p>
                @enderror

            </div>

            <div>
                <x-input-label for="descripcion" value="{{__('Descripción')}}"/>
                <textarea id="descripcion" wire:model="descripcion" class="w-full h-40" placeholder="Descripcion del juego" >{{old('descripcion')}}</textarea>

                @error('descripcion')
                    <p class="text-red-500">La descripción del juego es obligatorio</p>
                @enderror
            </div>

            <div>
                <x-input-label for="precio" value="{{__('Precio(En €)')}}"/>
                <x-text-input id="precio" wire:model="precio" type="number" value="{{old('precio')}}" placeholder="Precio del juego" />

                @error('precio')
                    <p class="text-red-500">El precio del juego es obligatorio</p>
                @enderror
            </div>

            <div>
                <x-input-label for="cantidad" value="{{__('Cantidad')}}"/>
                <x-text-input id="cantidad" wire:model="cantidad" type="text" value="{{old('cantidad')}}" placeholder="Cantidad de juegos" />

                @error('cantidad')
                    <p class="text-red-500">La cantidad del juego es obligatoria</p>
                @enderror
            </div>
            
            <x-primary-button>Crear</x-primary-button>

        </form>
    </div>
</div>
