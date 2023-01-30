<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="/js/app.js"></script>
        <title>Alpine Examples</title>
    </head>

    <body class="grid items-center justify-center h-screen">
        <div x-data="{ show: false }" @click.away="show = false">
            <button @click="show = ! show">Links</button>

            <div class="absolute bg-black text-white py-2 rounded mt-1"
                 x-show="show"
                 x-transition:enter="transition duration-200 transform ease-out"
                 x-transition:enter-start="scale-75"
                 x-transition:leave="transition duration-100 transform ease-in"
                 x-transition:leave-end="opacity-0 scale-90"
            >
                <a class="block px-4 hover:bg-gray-800 text-xs py-px" href="#">Edit</a>
                <a class="block px-4 hover:bg-gray-800 text-xs py-px" href="#">Delete</a>
                <a class="block px-4 hover:bg-gray-800 text-xs py-px" href="#">Report Spam </a>
            </div>
        </div>
    </body>
</html>
