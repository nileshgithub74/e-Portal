<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;

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

        // Store the message in the database
        ContactMessage::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
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