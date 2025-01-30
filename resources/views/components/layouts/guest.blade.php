<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romance Writers of America Conference</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .countdown {
            font-size: 2rem;
            font-weight: bold;
            color: #DB2777;
        }
    </style>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    @fluxStyles
</head>
<body class="bg-pink-100">
<div class="min-h-screen flex flex-col justify-center items-center">
    <header class="text-center">
        <div class="w-full max-w-4xl mx-auto mb-8 flex justify-center items-center">
            <img src="/images/logo2025.png" alt="Conference Header Image" class="w-96 h-auto rounded-lg shadow-lg">
        </div>
        <h1 class="text-5xl font-extrabold text-pink-600 mb-4">Romance Writers of America 2025 Annual Conference</h1>
        <p class="text-xl text-gray-700">Join us for inspiration and creativity! Celebrating the Voices of Romance Together!</p>
        <nav class="flex items-center justify-between flex-wrap mx-auto my-6 max-w-container px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center">
                <div class="ml-auto hidden lg:flex lg:items-center">
                    <a class="bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2
                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center
                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400" href="/">Home</a>

{{--                    <a class="ml-8 bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2--}}
{{--                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center--}}
{{--                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400"--}}
{{--                       href="/sponsor">Sponsors</a>--}}

{{--                    <a class="ml-8 bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2--}}
{{--                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center--}}
{{--                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400"--}}
{{--                       href="/excursion">Excursion</a>--}}

                    <a class="ml-8 bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2
                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center
                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400" href="/schedule">Conference Schedule</a>

{{--                    <a class="ml-8 bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2--}}
{{--                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center--}}
{{--                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400" href="/author">Author Table Sign-up</a>--}}

{{--                    <a class="ml-8 bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2--}}
{{--                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center--}}
{{--                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400" href="/vendor">Vendor Sign-up</a>--}}

                    <a class="ml-8 bg-pink-600 hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:ring-offset-2
                    focus:ring-offset-pink-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center
                    sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400" target="_blank"
                       href="https://conference.rwaconference.org/e/2/romance-writers-of-america-annual-conference-2025">Conference
                        Registration</a>

                </div>

            </div>
        </nav>
    </header>
    <main class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </main>

    @livewireScripts
    <footer class="mt-12 text-gray-600">
        <p>© 2024-2025 Romance Writers of America. All rights reserved.</p>
    </footer>
</div>
@fluxScripts
</body>
</html>
