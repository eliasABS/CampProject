<?php

namespace App\Http\Controllers;

use app\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        return view('profile');
    }
}
