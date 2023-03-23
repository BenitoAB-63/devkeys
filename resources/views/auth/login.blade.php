<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" placeholder="Tu Email"/>
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        <div>
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" name="password" type="password" placeholder="Tu Contraseña" />
            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <x-primary-button>Iniciar Sesión</x-primary-button>
        

    </form>

    <x-form-links>
        <x-link :href="__('/register')">¿No tienes una cuenta? Registrate</x-link>
        <x-link :href="__('/forgot-password')">¿Perdiste tu Contraseña? Recuperala</x-link>
    </x-form-links>

</x-guest-layout>
