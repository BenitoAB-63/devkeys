<div>
    <div>
        @if (session()->has('success'))
            <p class="bg-green-400 p-3 text-white font-bold uppercase text-center mx-auto my-4">Juego Actualizado Correctamente</p>
        @endif
        
    <div>
    <div>
        <form wire:submit.prevent="updateJuego" action="" method="POST" class="m-10">
            
            <div>
                <x-input-label for="juego" value="{{__('Juego')}}"/>
                <x-text-input id="juego" wire:model="juego" type="text" value="{{$juego ?? old('juego')}}" placeholder="Nombre del juego" />

                @error('juego')
                    <p class="text-red-500">El nombre del juego es obligatorio</p>
                @enderror
            </div>
            
            <div>
                <x-input-label for="imagen_nueva" value="{{__('Imagen')}}"/>
                <x-text-input id="imagen_nueva" wire:model="imagen_nueva" type="file" accept="image/*"/>

                

                <div class="my-5 w-56">
                    @if ($imagen_nueva)
                        <p class="dark:text-white">Nueva Imagen</p>
                        <img src="{{$imagen_nueva->temporaryUrl()}}" alt="">
                    @else
                        <p class="dark:text-white">Imagen Actual</p>
                        <img src="{{asset('img/juegos/'.$imagen)}}" alt="{{'Imagen '.$juego}}">
                    @endif
                </div>



            </div>

            <div>
                <x-input-label for="descripcion" value="{{__('Descripción')}}"/>
                <textarea id="descripcion" wire:model="descripcion" class="w-full h-40" placeholder="Descripcion del juego" >{{$descripcion ?? old('descripcion')}}</textarea>

                @error('descripcion')
                    <p class="text-red-500">La descripción del juego es obligatorio</p>
                @enderror
            </div>

          
            <div>
                <x-input-label for="precio" value="{{__('Precio(En €)')}}"/>
                <x-text-input id="precio" wire:model="precio" type="number" value="{{$precio ?? old('precio')}}" placeholder="Precio del juego" />

                @error('precio')
                    <p class="text-red-500">El precio del juego es obligatorio</p>
                @enderror
            </div>

            <div>
                <x-input-label for="cantidad" value="{{__('Cantidad')}}"/>
                <x-text-input id="cantidad" wire:model="cantidad" type="text" value="{{$cantidad ?? old('cantidad')}}" placeholder="Cantidad de juegos" />

                @error('cantidad')
                    <p class="text-red-500">La cantidad del juego es obligatorio</p>
                @enderror
            </div>
            <x-primary-button>Guardar Cambios</x-primary-button>

        </form>
    </div>
</div>
