<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

class UsersController extends Controller
{
    private static function getData()
    {
        return [
            ["id" => 1, "fullname" => "Mouad El Ouarti", "age" => 19, "email" => "m@m.com"],
            ["id" => 2, "fullname" => "Nezha El Motaki", "age" => 57, "email" => "n@n.com"],
            ["id" => 3, "fullname" => "Aziz El Ouarti", "age" => 58, "email" => "a@a.com"],
            ["id" => 4, "fullname" => "Mouna El Ouarti", "age" => 17, "email" => "o@o.com"],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("users.index", [
            "users_data" => Personne::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user-fullname' => 'required',
            'user-age' => ['required', 'integer'],
            'user-email' => ['required'],
        ]);
        $personne = new Personne();
        $personne->fullname = strip_tags($request->input("user-fullname"));
        $personne->age = strip_tags($request->input("user-age"));
        $personne->email = strip_tags($request->input("user-email"));

        $personne->save();

        return redirect()->route("users.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $index = Personne::findOrFail($id);

        if ($index === false) {
            abort(404);
        }
        return view("users.show", [
            "user" => $index,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Personne::findOrFail($id);
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user-fullname' => 'required',
            'user-age' => ['required', 'integer'],
            'user-email' => ['required'],
        ]);
        $update_user = Personne::findOrFail($id);
        $update_user->fullname = strip_tags($request->input("user-fullname"));
        $update_user->email = strip_tags($request->input("user-email"));
        $update_user->age = strip_tags($request->input("user-age"));

        $update_user->save();

        return redirect()->route("users.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $to_delete = Personne::findOrFail($id);
        $to_delete->delete();

        return redirect()->route("users.index");
    }
}
