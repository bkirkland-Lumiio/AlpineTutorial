<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Document</title>
    </head>

    <body>
        <div x-data="{ first: 0, second: 0, message: 0 }">
            <input type="text" x-model.number="first"> + <input type="text" x-model.number="second"> = <output x-text="first + second"></output>
        </div>
    </body>
</html>
