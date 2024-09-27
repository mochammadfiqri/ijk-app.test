<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
                document.querySelector('html').classList.remove('dark');
                document.querySelector('html').style.colorScheme = 'light';
            } else {
                document.querySelector('html').classList.add('dark');
                document.querySelector('html').style.colorScheme = 'dark';
            }
    </script>
</head>

<body class="font-inter antialiased tracking-tight bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-400">

    <div class="flex min-h-screen flex-col overflow-hidden supports-[overflow:clip]:overflow-clip">
        <header class="fixed top-2 z-30 w-full md:top-6">
            <div class="mx-auto max-w-6xl px-4 sm:px-6">
                <div class="relative flex h-14 items-center justify-between gap-3 rounded-2xl bg-white/90 px-3 shadow-lg shadow-black/[0.03] backdrop-blur-sm before:pointer-events-none before:absolute before:inset-0 before:rounded-[inherit] before:border before:border-transparent before:[background:linear-gradient(theme(colors.gray.100),theme(colors.gray.200))_border-box] before:[mask-composite:exclude_!important] before:[mask:linear-gradient(white_0_0)_padding-box,_linear-gradient(white_0_0)]">
                    <div class="flex flex-1 items-center">
                        <a class="inline-flex" aria-label="Cruip" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                <path class="fill-blue-500" fill-rule="evenodd"
                                    d="M15.052 0c6.914.513 12.434 6.033 12.947 12.947h-5.015a7.932 7.932 0 0 1-7.932-7.932V0Zm-2.105 22.985V28C6.033 27.487.513 21.967 0 15.053h5.015a7.932 7.932 0 0 1 7.932 7.932Z"
                                    clip-rule="evenodd"></path>
                                <path class="fill-blue-300" fill-rule="evenodd"
                                    d="M0 12.947C.513 6.033 6.033.513 12.947 0v5.015a7.932 7.932 0 0 1-7.932 7.932H0Zm22.984 2.106h5.015C27.486 21.967 21.966 27.487 15.052 28v-5.015a7.932 7.932 0 0 1 7.932-7.932Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    {{-- <nav class="flex flex-1 items-center">

                        <!-- Desktop menu links -->
                        <ul class="flex flex-1 items-center justify-center gap-8">
                            <li class="cblyd c88zw">
                                <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="pricing.html">Home</a>
                            </li>
                            <li class="cblyd c88zw">
                                <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="customers.html">Customers</a>
                            </li>
                            <li class="cblyd c88zw">
                                <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="blog.html">Blog</a>
                            </li>
                            <li class="cblyd c88zw">
                                <a class="cgq07 ce0zw cdrow cwcpl c4a2s" href="documentation.html">Docs</a>
                            </li>
                        </ul>

                    </nav> --}}
                    <nav class="flex flex-1 items-center">
                        <ul class="flex flex-1 items-center justify-center gap-8">
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Berita</a>
                                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">Dropdown hover
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownHover"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownHoverButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="flex flex-1 items-center justify-end gap-3">
                        <li><a class="btn-sm bg-white text-gray-800 shadow hover:bg-gray-50" href="/signin">Login</a>
                        </li>
                        <li><a class="btn-sm bg-gray-800 text-gray-200 shadow hover:bg-gray-900"
                                href="/signup">Register</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="grow">
            {{ $slot }}
        </main>
    </div>

    {{-- <main class="bg-white dark:bg-gray-900">

        <!-- Content -->
        <div class="w-full">

            <div class="min-h-[100dvh] h-full">

                <!-- Header -->
                <div>
                    <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                        <!-- Logo -->
                        <a class="block" href="{{ route('dashboard') }}">
                            <svg class="fill-violet-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                <path
                                    d="M31.956 14.8C31.372 6.92 25.08.628 17.2.044V5.76a9.04 9.04 0 0 0 9.04 9.04h5.716ZM14.8 26.24v5.716C6.92 31.372.63 25.08.044 17.2H5.76a9.04 9.04 0 0 1 9.04 9.04Zm11.44-9.04h5.716c-.584 7.88-6.876 14.172-14.756 14.756V26.24a9.04 9.04 0 0 1 9.04-9.04ZM.044 14.8C.63 6.92 6.92.628 14.8.044V5.76a9.04 9.04 0 0 1-9.04 9.04H.044Z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="w-full max-w-3xl mx-auto px-4 py-8">
                    {{ $slot }}
                </div>

            </div>

        </div>

        </div>

    </main> --}}

    @livewireScriptConfig
</body>

</html>