<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Store the message in the database
            ContactMessage::create($validated);

            // Log the attempt to send email
            Log::info('Attempting to send email to: ' . config('mail.admin_email', 'kumarniilesh843127@gmail.com'));
            
            // Send email
            Mail::to('kumarniilesh843127@gmail.com')->send(new ContactFormMail($validated));
            
            // Log success
            Log::info('Email sent successfully');

            return redirect()->route('contact')
                ->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Failed to send email: ' . $e->getMessage());
            
            return redirect()->route('contact')
                ->with('error', 'There was an issue sending your message. Please try again later.');
        }
    }

    public function messages()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();
        return view('admin.messages', compact('messages'));
    }

    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);
        return redirect()->back()->with('success', 'Message marked as read');
    }
} 