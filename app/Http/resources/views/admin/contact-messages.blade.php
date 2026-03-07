@extends('admin.layout')

@section('title', 'Contact Messages')
@section('header', 'Contact Messages')

@section('header-actions')
<a href="{{ route('admin.dashboard') }}" class="rounded-lg border-2 border-black px-4 py-2 font-bold hover:bg-gray-100">← Dashboard</a>
@endsection

@section('content')
<div class="border-4 border-black bg-white shadow-[6px_6px_0_0_#000]">
    <div class="border-b-4 border-black bg-gray-100 px-6 py-4">
        <h2 class="font-black uppercase tracking-wide">Hire Me Submissions</h2>
        <p class="font-mono text-sm text-gray-600">Messages from your portfolio contact form</p>
    </div>

    @if($messages->isEmpty())
        <div class="border-4 border-dashed border-gray-300 p-12 text-center">
            <i class="fa-solid fa-inbox mb-4 block text-5xl text-gray-300"></i>
            <p class="font-mono text-gray-500">No messages yet.</p>
            <p class="mt-2 text-sm text-gray-400">Submissions from the portfolio form will appear here.</p>
        </div>
    @else
        <div class="divide-y-4 divide-black">
            @foreach($messages as $msg)
                <article class="p-6 hover:bg-gray-50/50">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                        <div class="min-w-0 flex-1">
                            <div class="mb-2 flex flex-wrap items-center gap-2">
                                <strong class="font-bold">{{ $msg->name }}</strong>
                                <a href="mailto:{{ $msg->email }}" class="font-mono text-sm text-brutal-cyan hover:underline">{{ $msg->email }}</a>
                            </div>
                            <p class="whitespace-pre-wrap text-gray-700">{{ $msg->message }}</p>
                            <p class="mt-2 font-mono text-xs text-gray-500">{{ $msg->created_at->format('M j, Y \a\t g:i A') }}</p>
                        </div>
                        <a href="mailto:{{ $msg->email }}" class="shrink-0 border-2 border-black bg-brutal-yellow px-4 py-2 font-bold hover:bg-yellow-400">
                            Reply
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="border-t-4 border-black bg-gray-100 px-6 py-4">
            {{ $messages->links() }}
        </div>
    @endif
</div>
@endsection
