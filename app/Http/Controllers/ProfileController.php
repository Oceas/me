<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($username)
    {
        if ($username) {
            $username = User::where('username', '=', $username)->firstOrFail();
        }

        return $username->get_biography();
    }

    public function index()
    {
        return view('profile');
    }
}
