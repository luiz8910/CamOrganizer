<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xamps Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex">

<!-- Sidebar -->
<aside class="bg-gray-800 text-white w-16 sm:w-64 min-h-screen">
    <div class="p-4">
        <h1 class="text-white text-2xl font-semibold hidden sm:block">Xampinho</h1>
    </div>
    <nav>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('home') }}" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-home mx-auto sm:mr-3 sm:mx-0"></i>
                    <span class="hidden sm:inline">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('clientes') }}" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-user-friends mx-auto sm:mr-3 sm:mx-0"></i>
                    <span class="hidden sm:inline">Clientes</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-camera mx-auto sm:mr-3 sm:mx-0"></i>
                    <span class="hidden sm:inline">DVRs</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-file-alt mx-auto sm:mr-3 sm:mx-0"></i>
                    <span class="hidden sm:inline">Marcas</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-sign-out-alt mx-auto sm:mr-3 sm:mx-0"></i>
                    <span class="hidden sm:inline">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<!-- Main Content -->
<div class="flex-1 p-8">
    @if(isset($route))
        @include($route)
    @endif
</div>

</body>
</html>
