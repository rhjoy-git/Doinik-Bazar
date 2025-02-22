<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Pass the user data to the account view
        return view('pages.account', compact('user'));
    }

    public function indexUpdatePassword()
    {
        // Get the authenticated user
        $user = Auth::user();
        return view('pages.user.update-password', compact('user'));
    }
    public function personalInformation()
    {
        // Get the authenticated user
        $user = Auth::user();
        return view('pages.user.profile-informataion', compact('user'));
    }
    public function manageAddress()
    {
        // Get the authenticated user
        $user = Auth::user();
        return view('pages.user.manage-address', compact('user'));
    }
}
