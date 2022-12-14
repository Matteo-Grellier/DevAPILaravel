<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    // User have password and email and password must be hashed
    // User can be connected with cookie

    function index($id)
    {
        return view('users.index', [
            'user' => User::where('id', $id)->firstOrFail(),
        ]);
    }

    function show()
    {
        return view('users.show', [
            'users' => User::all(),
        ]);
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User;

        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return response()->json(['success' => 'User created successfully.']);
    }

    function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::find($id);

        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return response()->json(['success' => 'User updated successfully.']);
    }



}
