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
            return redirect()->route('user.account')->with('user', $user);
        }
        return view('auth.register');
    }
    // Wishlist
    public function userWishlist()
    {
        if (Auth::user()) {
            $user = Auth::user();
            return view('pages.wishlist', compact('user'));
        }
        return redirect()->route('login');
    }
    // Cart
    public function userCart()
    {
        if (Auth::user()) {
            return view('pages.cart');
        }
        return redirect()->route('login');
    }
    // Address
    public function userAddress()
    {
        return view('partials.checkout-address');
    }
    // Payment 
    public function userPayment()
    {
        return view('partials.checkout-payment');
    }
    // delivery
    public function userDelivery()
    {
        return view('partials.checkout-delivery');
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
            'phone' => 'required|string|max:14',
            'dob' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'email' => 'required|email|confirmed|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        Auth::login($user);
        return redirect('user/account')->with('success', 'Registration successful!');
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
        // Find the user by ID  
        $user = User::findOrFail($id);

        // Validate input  
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:14',
            'dob' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
        ]);

        // Update user information  
        $user->update($data);

        return back()->with('success', 'User updated successfully!');
    }
    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        $data = Auth::user();

        // Check if the old password matches
        if (!Hash::check($request->old_password, $data->password)) {
            return back()->with('error', 'Old password is incorrect.');
        }
        $user = User::find($data->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('user/account')->with('success', 'Password changed successful!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
