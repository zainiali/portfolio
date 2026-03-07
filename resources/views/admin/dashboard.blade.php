@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="space-y-8">
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="border-4 border-black bg-white p-6 shadow-[6px_6px_0_0_#000]">
            <div class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center border-4 border-black bg-brutal-yellow">
                    <i class="fa-solid fa-envelope text-xl"></i>
                </div>
                <div>
                    <p class="font-mono text-sm text-gray-600">Total Messages</p>
                    <p class="font-black text-2xl">{{ $totalMessages }}</p>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.contact-messages') }}" class="border-4 border-black bg-brutal-lime p-6 font-bold shadow-[6px_6px_0_0_#000] transition hover:-translate-y-0.5 hover:shadow-[8px_8px_0_0_#000]">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-inbox text-2xl"></i>
                <span>View All Messages</span>
            </div>
        </a>
        <a href="{{ url('/') }}" target="_blank" class="border-4 border-black bg-brutal-cyan p-6 font-bold shadow-[6px_6px_0_0_#000] transition hover:-translate-y-0.5 hover:shadow-[8px_8px_0_0_#000]">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-external-link text-2xl"></i>
                <span>Open Portfolio</span>
            </div>
        </a>
    </div>

    <div class="border-4 border-black bg-white shadow-[6px_6px_0_0_#000]">
        <div class="border-b-4 border-black bg-gray-100 px-6 py-4">
            <h2 class="font-black uppercase tracking-wide">Recent Messages</h2>
            <p class="font-mono text-sm text-gray-600">Latest hire requests from your portfolio</p>
        </div>
        <div class="divide-y-4 divide-black">
            @forelse($recentMessages as $msg)
                <div class="flex flex-col gap-2 p-6 sm:flex-row sm:items-start sm:justify-between">
                    <div class="min-w-0 flex-1">
                        <p class="font-bold">{{ $msg->name }}</p>
                        <a href="mailto:{{ $msg->email }}" class="font-mono text-sm text-brutal-cyan hover:underline">{{ $msg->email }}</a>
                        <p class="mt-2 line-clamp-2 text-gray-600">{{ $msg->message }}</p>
                        <p class="mt-1 font-mono text-xs text-gray-500">{{ $msg->created_at->diffForHumans() }}</p>
                    </div>
                    <a href="{{ route('admin.contact-messages') }}" class="shrink-0 border-2 border-black bg-white px-4 py-2 font-bold hover:bg-brutal-yellow">
                        View
                    </a>
                </div>
            @empty
                <div class="p-12 text-center">
                    <p class="font-mono text-gray-500">No messages yet.</p>
                    <p class="mt-2 text-sm text-gray-400">Submissions from the Hire Me form will appear here.</p>
                </div>
            @endforelse
        </div>
        @if($recentMessages->isNotEmpty())
            <div class="border-t-4 border-black bg-gray-100 px-6 py-3">
                <a href="{{ route('admin.contact-messages') }}" class="font-bold hover:underline">View all messages →</a>
            </div>
        @endif
    </div>
</div>
@endsection
