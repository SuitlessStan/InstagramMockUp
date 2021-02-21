<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function index(\App\Models\User $user)
    {
        $user = User::query()->findOrFail($user);

        return view('profile.index', compact('user'));
    }

    public function store()
    {
        dd(request()->all());
    }

    public function edit(\App\Models\User $user)
    {

        return view('profile.edit', compact('user'));

    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        $user->fill($data);
        $user->save();
        return redirect('/profile/{{$user->id}}');
    }

}
