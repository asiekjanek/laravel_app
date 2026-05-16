<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user->name = $request->input('name');
        $user->save();

        return redirect('/admin/panel')->with('success', 'Imię użytkownika zostało zmienione.');
    }
}