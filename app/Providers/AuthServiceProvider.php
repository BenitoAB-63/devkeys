<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function($notificable,$url){
            return (new MailMessage)
                ->subject('Verificar Cuenta')
                ->line('SI NO CREASTE ESTA CUENTA IGNORA ESTE MENSAJE')
                ->line('VERIFICA TU CUENTA')
                ->line('Tu Cuenta esta casi lista, presiona el siguiente enlace a continuación:')
                ->action('Confirmar Cuenta ',$url);

        });
    }
}
