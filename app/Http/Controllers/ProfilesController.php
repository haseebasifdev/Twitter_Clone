<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }
    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        // if ($user->isNot(auth()->user())) {
        //     abort(404);
        // }
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
    {
        // dd(request('avatar'));
        $attributes = request()->validate([

            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
            'avatar' => ['file', 'image'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['sometimes', 'required', 'string', 'min:8', 'confirmed'],
        ]);
        if (request('avatar')) {

            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        $user->update($attributes);
        return redirect('/tweets');
    }
}
