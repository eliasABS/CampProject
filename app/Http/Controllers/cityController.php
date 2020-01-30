<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class cityController extends Controller
{
    public function create()
    {
        return view("cities.create");
    }

    public function store()
    {
        $city = new city;
        $city->name = request("name");
        $city->save();

        return redirect('/cities/create');
    }
}
