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
                    <img class="rounded-full max-w-xs" src="{{ asset('build/assets/pngimg.com - hello_kitty_PNG46.png') }}" alt="logo">
                    <x-nav-link icon="home" wire:navigate href="/dashboard" :active="request()->is('/')">Dashboard</x-nav-link>
                    <x-nav-link icon="inbox" wire:navigate href="/check-in" :active="request()->is('check-in')">Check In</x-nav-link>
                    <x-nav-link icon="document-text" wire:navigate href="/attendance" :active="request()->is('attendance')">Attendance</x-nav-link>
                    <x-nav-link icon="calendar" wire:navigate href="/policy" :active="request()->is('policy')">Policy</x-nav-link>
                </div>
                <div class="flex flex-col space-y-2">
                    <x-nav-link icon="cog-6-tooth" wire:navigate href="#">Settings</x-nav-link>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:bg-[#5b5340] hover:text-white rounded-md px-3 py-2 text-sm font-bold w-full text-left">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
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
