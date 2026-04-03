<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tailwind (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>

<body class="bg-gray-100 dark:bg-[#0f0f0f] font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-md w-full bg-white dark:bg-[#1a1a1a] rounded-2xl shadow-md p-8 text-center space-y-6">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">
                Welcome, Dev 👋
            </h1>
            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                Build this app with your own ideas and skills.  
                Trust yourself — avoid relying too much on AI.
            </p>
            <div class="border-t border-gray-200 dark:border-[#2a2a2a]"></div>
             <div class="bg-gray-50 dark:bg-[#121212] rounded-lg p-4 border border-gray-200 dark:border-[#2a2a2a]">
                <h2 class="text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">
                    🚀 Quick Start
                </h2>

                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li>1. Setup authentication (login & register)</li>
                    <li>2. Create role: <strong>Manager</strong> & <strong>Staff</strong></li>
                    <li>3. Build task module</li>
                    <li>4. Create dashboard UI</li>
                </ul>
            </div>
            <div class="text-left space-y-3">
                <h2 class="text-sm font-medium text-gray-700 dark:text-gray-300">
                    Your Tasks:
                </h2>
                <ul class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                    <li>• Create module task (manager & staff)</li>
                    <li>• Create dashboard</li>
                </ul>
            </div>
            <a href="{{ route('login') }}"
                class="block w-full bg-black text-white text-sm py-2.5 rounded-lg hover:bg-gray-800 transition">
                Get Started
            </a>
        </div>
    </div>

</body>
</html>