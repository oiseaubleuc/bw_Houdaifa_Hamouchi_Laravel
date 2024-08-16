<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        // Validatie van het formulier
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Verzend e-mail (optioneel, als je een notificatie wil sturen)
        // Mail::to('your-email@example.com')->send(new ContactFormMail($request->all()));

        // Terugsturen naar de contactpagina met een succesbericht
        return redirect()->route('contact.show')->with('success', 'Uw bericht is succesvol verzonden. We nemen zo snel mogelijk contact met u op.');
    }
}
