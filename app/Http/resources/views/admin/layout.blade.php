<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') | Zainab</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;700&family=Space+Grotesk:wght@500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brutal: {
                            yellow: '#FFD600',
                            cyan: '#00E5FF',
                            pink: '#FF3D81',
                            lime: '#76FF03',
                            ink: '#000000',
                            paper: '#FFFFFF',
                        },
                    },
                    fontFamily: { sans: ['Space Grotesk', 'sans-serif'], mono: ['JetBrains Mono', 'monospace'] },
                },
            },
        };
    </script>
    <style>
        body { font-family: 'Space Grotesk', sans-serif; }
        .admin-grid { display: grid; grid-template-columns: 280px 1fr; min-height: 100vh; }
        @media (max-width: 768px) {
            .admin-grid { grid-template-columns: 1fr; }
            .admin-sidebar { position: fixed; left: 0; top: 0; bottom: 0; z-index: 50; width: 280px; transform: translateX(-100%); transition: transform 0.2s; }
            .admin-sidebar.open { transform: translateX(0); }
            .admin-overlay.open { display: block !important; }
        }
        .sidebar-link { transition: background 0.15s, transform 0.1s; }
        .sidebar-link:hover { background: #f0f0f0; }
        .sidebar-link.active { background: #FFD600; font-weight: 800; }
    </style>
</head>
<body class="min-h-screen bg-white text-black antialiased">
    <div class="admin-grid">
        <aside id="adminSidebar" class="admin-sidebar border-r-4 border-black bg-white">
            <div class="flex h-full flex-col">
                <div class="border-b-4 border-black p-5">
                    <a href="{{ route('admin.dashboard') }}" class="block">
                        <span class="font-black text-lg uppercase tracking-wide">ZAINAB.exe</span>
                        <span class="mt-1 block font-mono text-xs text-gray-500">ADMIN PANEL</span>
                    </a>
                </div>
                <nav class="flex-1 overflow-y-auto p-4">
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center gap-3 rounded-lg border-2 border-black px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'active shadow-[3px_3px_0_0_#000]' : '' }}">
                                <i class="fa-solid fa-gauge-high w-5 text-center"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.contact-messages') }}" class="sidebar-link flex items-center gap-3 rounded-lg border-2 border-black px-4 py-3 {{ request()->routeIs('admin.contact-messages') ? 'active shadow-[3px_3px_0_0_#000]' : '' }}">
                                <i class="fa-solid fa-envelope w-5 text-center"></i>
                                <span>Contact Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" target="_blank" class="sidebar-link flex items-center gap-3 rounded-lg border-2 border-black px-4 py-3">
                                <i class="fa-solid fa-external-link w-5 text-center"></i>
                                <span>View Portfolio</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="border-t-4 border-black p-4">
                    <p class="font-mono text-xs text-gray-500">&copy; {{ date('Y') }} Zainab</p>
                    <a href="{{ url('/') }}" class="mt-2 inline-block text-sm font-bold hover:underline">← Back to site</a>
                </div>
            </div>
        </aside>
        <div id="adminOverlay" class="admin-overlay fixed inset-0 z-40 hidden bg-black/50"></div>
        <main class="flex flex-col overflow-x-hidden bg-[length:24px_24px] bg-[image:linear-gradient(rgba(0,0,0,0.06)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,0.06)_1px,transparent_1px)]">
            <header class="flex items-center justify-between border-b-4 border-black bg-white/95 px-4 py-4 backdrop-blur sm:px-6 lg:px-8">
                <button type="button" id="sidebarToggle" class="rounded-lg border-2 border-black p-2 md:hidden" aria-label="Toggle menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <h1 class="font-black text-xl uppercase tracking-wide md:text-2xl">@yield('header', 'Admin')</h1>
                <div class="flex items-center gap-2">
                    @yield('header-actions')
                </div>
            </header>
            <div class="flex-1 p-4 sm:p-6 lg:p-8">
                @if(session('success'))
                    <div class="mb-6 border-4 border-black bg-brutal-lime p-4 font-bold shadow-[4px_4px_0_0_#000]">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
    <script>
        const sidebar = document.getElementById('adminSidebar');
        const overlay = document.getElementById('adminOverlay');
        const toggle = document.getElementById('sidebarToggle');
        if (toggle) {
            toggle.addEventListener('click', () => { sidebar?.classList.toggle('open'); overlay?.classList.toggle('open'); overlay?.classList.toggle('hidden'); });
            overlay?.addEventListener('click', () => { sidebar?.classList.remove('open'); overlay?.classList.remove('open'); overlay?.classList.add('hidden'); });
        }
    </script>
</body>
</html>
