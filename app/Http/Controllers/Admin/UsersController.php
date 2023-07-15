<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validted = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required'
        ]);
        $validted['password'] = bcrypt($validted['password']);
        User::create($validted);
        return redirect('/admin/users')->with('success', 'User created successfully!');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validted = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => "nullable",
            'role' => 'required'
        ]);
        if ($validted['password'] == null) {
            unset($validted['password']);
        }else{
            $validted['password'] = bcrypt($validted['password']);
        }
        User::where('id', $id)->update($validted);
        return redirect('/admin/users')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/admin/users')->with('success', 'User deleted successfully!');
    }
}
