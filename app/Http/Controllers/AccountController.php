<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function index(){
        // Get the authenticated user
    $user = Auth::user();

    // Pass the user data to the account view
    return view('pages.account', compact('user'));
    }


}
