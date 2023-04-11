<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $email = $request->input('email');
    $subject = $request->input('subject');
    $message = $request->input('message');
    $user = Auth::user();
    $name = $user->name;
    $details = [
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
        'name' => $name
    ];

    Mail::to('dabidbell5656@gmail.com')->send(new ContactFormMail($details, $name));

    return redirect()->back()->with('success', 'Thank you for your message!');
}
}
?>