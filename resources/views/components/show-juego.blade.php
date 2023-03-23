<x-app-layout>
  
    <div>
        <h1 class="text-4xl font-extrabold text-center text-white m-10"> {{$juego->juego}} </h1>

        <div class="m-5 flex flex-col md:flex-row gap-10">
            <div class="">
                    <div class="relative">
                        <img src="{{'/img/juegos/'.$juego->imagen}}" alt="Imagen juego" >
                            <div>
                                <livewire:boton-deseados :juego="$juego" />
                            </div>
                    </div>
            
                   
                <p class="text-center text-amber-400 font-extrabold text-2xl mt-3"> {{$juego->precio}} € </p>
            </div>

            <div>
                <div>
                    <p class="text-md font-normal text-left text-white "> {{$juego->descripcion}} </p>
                </div>
                <form action="" class="mt-5">
                    @csrf

                    <div class="flex justify-between m-3">

                        <div class="flex gap-5 items-center">

                            
                                @if($juego->cantidad)
                                    <div>
                                        <x-input-label for="cantidad" value="Cantidad"/>
                                    </div>

                                    @if($juego->cantidad >= 3)
                                        <div>
                                            <x-text-input type="number" id="cantidad" name="cantidad" min="1" max="3"  class="w-20"/>
                                        </div>

                                    @elseif (($juego->cantidad < 3) && ($juego->cantidad > 0))

                                        <div>
                                            <x-text-input type="number"  id="cantidad" name="cantidad" min="1" max="{{$juego->cantidad}}" />
                                        </div>
                                    
                                    @endif

                                    

                                @else
                                        
                                @endif
                            

                        </div>

                        @if($juego->cantidad)
                            <div>
                                <button class="'items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mt-2 w-full md:w-36">
                                    Añadir al carro
                                <button/>
                            </div>
                        @endif

                    </div>

                    @if(!$juego->cantidad)
                        
                            <p class=" my-5 mx-auto text-center p-5 bg-red-500 font-extrabold text-white text-2xl">
                                    NO QUEDAN KEYS EN STOCK
                            </p>
                        
                    @endif

                </form>
              
            </div>


            

        </div>

        
    </div>

    <livewire:comentarios :juego="$juego->id" />

    


</x-app-layout>

