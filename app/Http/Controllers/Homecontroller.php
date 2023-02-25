<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role = Auth::user()->role;
        $staff = User::select('name')->where('role',0)->pluck('name');
        $admin = User::select('name')->where('role', 2)->pluck('name');
        $SuperAdmin = User::select('name')->where('role', 1)->pluck('name');

        if($role=='1')
        {
            return view('superAdmin',compact('admin', 'SuperAdmin', 'staff'));
        }

        if($role=='2')
        {
            return view('admin',compact('staff'));
        }

        else
        {
            return view('dashboard');
        }
    }

    public function addAdmin(Request $request)
    {
        $data = new User;

        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role=$request->role;

        $data->save();
        return redirect('/redirects');

    }
}
