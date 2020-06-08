<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }
    
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            //Ignore is used to ignore the current user's username in case it was not changed
            'username' => ['string', 'required', ' max:255', 'alpha_dash', ValidationRule::unique('users')->ignore($user)], 
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255', ValidationRule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
            
        ]);
        
        //If a new avatar has been requested, only then do you set it
        if(request('avatar'))
        {
            $attributes['avatar']= request('avatar')->store('avatars');           
        }
        $user->update($attributes); //Updating the user's attributes

        return redirect($user->path());
    }

}
