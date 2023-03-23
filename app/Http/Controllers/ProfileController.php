<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    use WithFileUploads;
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
       

        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        
        if($request->img){
            //Obtenemos la imagen
            $imagen=$request->file('img');
          
            //Generamos un nombre unico para cada imagen
            $nombreImagen=Str::uuid().".".$imagen->extension();

            //Creamos la imagen que se almacena en el servidor
            $imagenServidor=Image::make($imagen);

            //Recortamos la imagen
            $imagenServidor->fit(1000,1000);

            //Creamos el path de la imagen
            $imagenPath=public_path('img/usuarios').'/'.$nombreImagen;

            //Guardamos la imagen en el servidor con el path 
            $imagenServidor->save($imagenPath);
        }
        
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        
        if($request->user()->img){
            unlink('img/usuarios/'.$request->user()->img);
        }
        
        $request->user()->img=$nombreImagen ?? Auth::user()->img ?? '';
        $request->user()->save();

        
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
