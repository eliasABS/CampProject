<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function create()
    {
        return view("categories.create");
    }

    public function store()
    {
        $category = new category;
        $category->name = request("name");
        $category->save();

        return redirect('/categories/create');
    }

}
