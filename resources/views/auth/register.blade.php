<x-guest-layout>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" placeholder="Tu Nombre" value="{{@old('name')}}"/>
            <x-input-error :messages="$errors->get('name')"/>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" placeholder="Tu Email" value="{{@old('email')}}"/>
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        {{-- <div>
            <x-input-label for="rol" :value="__('Selecciona tu Rol')" />
                <select name="rol" id="rol" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full my-1'">
                    <option value="0">Cliente</option>
                    <option value="1">Administrador</option>
                </select>
            <x-input-error :messages="$errors->get('rol')"/>
        </div> --}}

        <div>
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" name="password" type="password" placeholder="Tu Contraseña"/>
            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Repetir Contraseña')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu Contraseña"/>
            
        </div>

        <x-primary-button>Crear Cuenta</x-primary-button>
        
    </form>

    <x-form-links>
        <x-link :href="__('/login')">¿Ya tienes una cuenta? Inicia Sesión</x-link>
        <x-link :href="__('/forgot-password')">¿Perdiste tu Contraseña? Recuperala</x-link>
    </x-form-links>
</x-guest-layout>
