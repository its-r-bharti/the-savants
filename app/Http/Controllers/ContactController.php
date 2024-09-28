<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Send the email
        Mail::to('contact@thesavants.in')->send(new ContactFormSubmission($validatedData));

        // Flash a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
