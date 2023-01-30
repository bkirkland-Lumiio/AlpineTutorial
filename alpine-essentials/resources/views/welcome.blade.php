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
        <div x-data="{ show: true }">
            <div class="w-12 h-12">
                <div
                        class="bg-green-400 w-full h-full"
                        x-show="show"
                        x-transition:enter="transition transform duration-1000"
                        x-transition:enter-start="opacity-0 scale-125"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition duration-200"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                ></div>
            </div>

            <button @click="show = ! show">Toggle</button>
        </div>
    </body>
</html>
