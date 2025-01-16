<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Store user in session
            $request->session()->put('user', $user);

            // Redirect based on role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    // User Dashboard
    public function userDashboard()
    {
        return view('user.dashboard'); // Create `resources/views/user/dashboard.blade.php`
    }

    // Admin Dashboard
    public function adminDashboard()
    {
        return view('admin.dashboard'); // Create `resources/views/admin/dashboard.blade.php`
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('login.form')->with('success', 'Logged out successfully.');
    }
}
