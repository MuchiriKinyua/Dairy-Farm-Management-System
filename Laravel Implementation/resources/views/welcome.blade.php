<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dairy Farm Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Add FontAwesome for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Tailwind CSS (Optional for styling) -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased bg-gray-100">

        <!-- Navigation Section -->
        <nav class="w-full flex justify-between items-center bg-green-600 p-4 text-white fixed top-0 left-0 z-50">
            <div class="flex items-center">
                <i class="fas fa-cow text-2xl"></i>
                <h1 class="ml-2 text-xl">Dairy Farm Management System</h1>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-200 hover:text-gray-100">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-200 hover:text-gray-100">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-200 hover:text-gray-100">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <!-- Dashboard Overview Section -->
        <div class="min-h-screen pt-24 flex flex-col justify-center items-center bg-gray-100">
            <div class="text-center mt-8 space-y-4">
                <h2 class="text-3xl font-bold">Welcome to the Dairy Farm Management System</h2>
                <p class="text-xl text-gray-700">Manage cows, milk production, feed, sales, and more all in one place.</p>
            </div>

            <!-- Dashboard Links to Sections -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('cows.index') }}" class="bg-green-500 text-white p-6 rounded-lg shadow-lg hover:bg-green-600 transition">
                    <i class="fas fa-cow text-4xl"></i>
                    <p class="mt-4 text-lg">Manage Cows</p>
                </a>
                <a href="{{ route('productions.index') }}" class="bg-blue-500 text-white p-6 rounded-lg shadow-lg hover:bg-blue-600 transition">
                    <i class="fas fa-milk text-4xl"></i>
                    <p class="mt-4 text-lg">Milk Production</p>
                </a>
                <a href="{{ route('sales.index') }}" class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg hover:bg-yellow-600 transition">
                    <i class="fas fa-chart-line text-4xl"></i>
                    <p class="mt-4 text-lg">Sales Tracking</p>
                </a>
                <a href="{{ route('employees.index') }}" class="bg-purple-500 text-white p-6 rounded-lg shadow-lg hover:bg-purple-600 transition">
                    <i class="fas fa-users text-4xl"></i>
                    <p class="mt-4 text-lg">Employee Management</p>
                </a>
                <a href="{{ route('consumptions.index') }}" class="bg-red-500 text-white p-6 rounded-lg shadow-lg hover:bg-red-600 transition">
                    <i class="fas fa-seedling text-4xl"></i>
                    <p class="mt-4 text-lg">Feed Inventory</p>
                </a>
                <a href="{{ route('roles.index') }}" class="bg-gray-500 text-white p-6 rounded-lg shadow-lg hover:bg-gray-600 transition">
                    <i class="fas fa-user-shield text-4xl"></i>
                    <p class="mt-4 text-lg">Permissions & Roles</p>
                </a>
            </div>
        </div>
    </body>
</html>
