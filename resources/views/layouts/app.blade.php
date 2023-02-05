<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Icons -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,-25" /> --}}
        <script src="https://unpkg.com/phosphor-icons"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex">
            <aside class="w-20 md:w-3/12 bg-gray-800">
                @if(auth('admins')->user())
                    @include('layouts.admin-aside')
                {{-- @elseif(auth('users')->user())
                    @include('layouts.user-navigation')
                @elseif(auth('owners')->user())
                    @include('layouts.owner-navigation') --}}
                @endif 
            </aside>

            {{-- @if(auth('admins')->user())
                @include('layouts.admin-navigation')
            @elseif(auth('users')->user())
                @include('layouts.user-navigation')
            @elseif(auth('owners')->user())
                @include('layouts.owner-navigation')
            @endif --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main class="w-full md:w-9/12">
                @if(auth('admins')->user())
                    @include('layouts.admin-navigation')
                {{-- @elseif(auth('users')->user())
                    @include('layouts.user-navigation')
                @elseif(auth('owners')->user())
                    @include('layouts.owner-navigation') --}}
                @endif
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
