
<div  class="absolute top-1 right-1 p-2 md:p-0 " >
    
        


    <button wire:click="agregarDeseados" title="{{$isWished ? "Quitar de Deseados" : "Agregar a Deseados"}}">
                    @if($isWished)
                        
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="w-10 h-10 md:w-5 md:h-5  text-green-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                       
 
                    @else
                        
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="w-10 h-10 md:w-5 md:h-5  text-green-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        
                    
                    @endif
        </button>   
 

        
    
</div>
