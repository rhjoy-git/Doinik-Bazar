<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        if (Auth::user()) {
            $user = Auth::user();
            // Redirect to the 'account' route if the user is authenticated  
            return redirect()->route('user.account')->with('user', $user);
        } else {
            return view('auth.register');
        }
    }

    public function userWishlist()
    {
        // Check if the user is already logged in
        if (Auth::user()) {
            $user = Auth::user();
            return view('pages.wishlist', compact('user'));
        }
        // If not logged in, show the login form
        return redirect()->route('login');
    }

    public function userCart()
    {
        // Check if the user is already logged in
        if (Auth::user()) {
            return view('pages.cart');
        }
        // If not logged in, show the login form
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    //  Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:users,phone',
            'dob' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'email' => 'required|email|confirmed|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Hash password
        $data['password'] = Hash::make($request->password);

        // Create user
        $user = User::create($data);

        // Log the user in
        Auth::login($user);

        // Redirect to dashboard
        return redirect('/account')->with('success', 'Registration successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
