<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function checkUserEmail(Request $request)
    {
        $email = $request->input('email');

        // Ensure the email is correctly formatted
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['error' => 'Invalid email format'], 400);
        }

        $count = DB::table('users')->where('email', $email)->count();

        return response()->json(['email_count' => $count]);
    }
    public function index(){
        $users = User::get();
        return view('user.index', [
            'users' => $users
        ]);
    }
    public function create(){
        $roles = Role::pluck('name', 'name')->all();
        return view('user.create', [
            'roles' => $roles
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:20',
            'roles' => 'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles($request->roles);

        return redirect('/users.index')->with('status', 'User created successfully with roles');

    }
    public function edit(User $user){
        $roles = Role::pluck('name', 'name')->all();
        $userRoles = $user->roles->pluck('name', 'name')->all();
        return view('user.edit', [
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }
    public function update(Request $request, User $user){
        
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if(!empty($request->password)){
            $data += [
                'password' => Hash::make($request->password),
            ];
        }

        $user->update($data);
        $user->syncRoles($request->roles);

        return redirect('/users')->with('status', 'User updated Successfully with roles');

    }
    public function destroy($userId){
        $user = User::findOrFail($userId);
        $user->delete();
        return redirect('/users')->with('status', 'User deleted Successfully');
    }
}
