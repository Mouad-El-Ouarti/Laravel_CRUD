<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        $id = request("id");
        if (isset($id)) {
            return view('home', [
                "id" => $id
            ]);
        } else {
            return view('home', [
                "id" => 0
            ]);
        }

    }
    public function about($name = "Unknown")
    {
        return view('about', [
            "name" => $name,
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
}
