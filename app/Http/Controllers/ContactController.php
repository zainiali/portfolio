<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => "Message sent! I'll get back to you soon.",
            ]);
        }

        return redirect()->back()->with('success', 'Message sent! I\'ll get back to you soon.');
    }
}
