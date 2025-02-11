<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    // Display the Contact Us page
    public function index()
    {
        return view('pages.contact-us');
    }
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form data (e.g., send an email, save to database, etc.)
        // Example: Log the data
        Log::info('Contact Form Submission:', $request->all());

        // Redirect back with a success message
        return redirect()->route('contact-us')->with('success', 'Message Sent Successfully!');
    }
}
