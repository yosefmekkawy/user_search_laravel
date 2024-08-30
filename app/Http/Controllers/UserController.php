<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');
        $users = User::where('username', 'LIKE', "%{$search}%")->get();

        return view('users.index', compact('users', 'search'));
    }
}
