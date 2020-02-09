<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    

    public function index()
    {
        $users = User::all();

        return view('admin.users',['users' => $users]);
    }

    public function getUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        return view('admin.user', ['user'=>$user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:5',
            'email'=>'required|unique:users|email',
            'roles'=>'required',
            'password'=>'required|same:confirm_password',
            'confirm_password'=>'required',
        ]);

        $user_password = Hash::make($request->password);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;
        $user->password = $user_password;
        
        $user->save();

        return redirect('admin/users')->with('success', 'Successfully Added a User'); 
          
    }
}
