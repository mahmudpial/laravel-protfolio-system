<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <h1 class="text-xl font-bold text-gray-800">My Portfolio</h1>

            <!-- Menu -->
            <div class="flex items-center space-x-6">

                <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="/skills" class="text-gray-700 hover:text-blue-600 font-medium">Skills</a>
                <a href="/portfolio" class="text-gray-700 hover:text-blue-600 font-medium">Portfolio</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>

                @auth
                    <a href="/dashboard" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                            Logout
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                        Login
                    </a>
                @endguest

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-6 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-gray-500 text-sm">
            © {{ date('Y') }} My Portfolio. All rights reserved.
        </div>
    </footer>

</body>

</html>