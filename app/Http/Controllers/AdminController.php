<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalMessages = ContactMessage::count();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalMessages', 'recentMessages'));
    }

    public function contactMessages()
    {
        $messages = ContactMessage::latest()->paginate(10);

        return view('admin.contact-messages', compact('messages'));
    }
}
