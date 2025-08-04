{{-- <html lang="en" class="background-color: #0c0808">    
    <div>
        <head>
            @livewireStyles
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
        </head>
        <body class="h-screen bg-white text-black">
            <div class="flex h-full">
                <nav class="flex flex-col space-y-10 w-1/4 h-screen bg-[#2b2a2a]">
                    <div class="hidden md:block space-y-10 my-20 mx-7 ">
                        <div class="flex flex-col space-y-2"> --}}
                            {{-- <img class="rounded-full max-w-xs" src="{{ asset('build/assets/hello-kitty.png') }}" alt="logo"> --}}
                            {{-- <x-nav-link icon="home" wire:navigate href="/" :active="request()->is('home')" wire:navigate>Home</x-nav-link>
                            <x-nav-link icon="inbox" wire:navigate href="/check-in" :active="request()->is('check-in')" wire:navigate>Check In</x-nav-link>
                            <x-nav-link icon="document-text" wire:navigate href="/attendance" :active="request()->is('attendance')" wire:navigate>Attendance</x-nav-link>
                            <x-nav-link icon="calendar" wire:navigate href="/policy" :active="request()->is('policy')" wire:navigate>Policy</x-nav-link>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <x-nav-link icon="cog-6-tooth" wire:navigate href="#">Settings</x-nav-link>
                            <x-nav-link icon="information-circle" wire:navigate href="#">Help</x-nav-link>
                        </div>
                    </div>
                </nav>
                <main class="text-white w-3/4 bg-[#0c0808] overflow-y-auto">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                       {{ $slot }}
                    </div>
                </main>
            </div>
            @livewireScripts
        </body>
    </div> --}}

{{-- </html> --}}


<!DOCTYPE html>
<html lang="en" class="background-color: #0c0808">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>
<body class="h-screen bg-white text-black">
    <div class="flex h-full">

        <nav class="flex flex-col space-y-10 w-1/4 h-screen bg-[#2b2a2a]">
            <div class="hidden md:block space-y-10 my-20 mx-7">
                <div class="flex flex-col space-y-2">
                    {{-- <img class="rounded-full max-w-xs" src="{{ asset('build/assets/hello-kitty.png') }}" alt="logo"> --}}
                    <x-nav-link icon="home" wire:navigate href="/dashboard" :active="request()->is('/')">Dashboard</x-nav-link>
                    <x-nav-link icon="inbox" wire:navigate href="/check-in" :active="request()->is('check-in')">Check In</x-nav-link>
                    <x-nav-link icon="document-text" wire:navigate href="/attendance" :active="request()->is('attendance')">Attendance</x-nav-link>
                    <x-nav-link icon="calendar" wire:navigate href="/policy" :active="request()->is('policy')">Policy</x-nav-link>
                </div>
                <div class="flex flex-col space-y-2">
                    <x-nav-link icon="cog-6-tooth" wire:navigate href="#">Settings</x-nav-link>
                    {{-- <x-nav-link icon="information-circle" wire:navigate href="#">M</x-nav-link> --}}
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-md transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="text-white w-3/4 bg-[#0c0808] overflow-y-auto">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
    @livewireScripts
</body>

{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>
<body class="bg-white text-black">
    <div class="flex h-screen">
        <nav class="w-1/4 bg-gray-800 text-white p-4">
            <!-- Sidebar nav -->
            <a wire:navigate href="/">Home</a><br>
            <a wire:navigate href="/attendance">Attendance</a>
        </nav>
        <main class="w-3/4 p-6 bg-gray-100 text-black overflow-y-auto">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>
</html> --}}