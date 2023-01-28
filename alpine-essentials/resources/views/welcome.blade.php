<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Document</title>
        <style>
            .active {
                color: red;
            }
        </style>
    </head>

    <body>
        <div x-data="{ currentTab: 'first' }">
            <button @click="currentTab = 'first'" :class="{'active': currentTab === 'first'}">First</button>
            <button @click="currentTab = 'second'" :class="{'active' : currentTab === 'second'}">Second</button>
            <button @click="currentTab = 'third'" :class="{'active' : currentTab === 'third'}">Third</button>

            <div style="border: 1px dotted gray; padding: 1rem; margin-top: 1rem">
                <div x-show="currentTab === 'first'">
                    <p>First tab.</p>
                </div>
                <div x-show="currentTab === 'second'">
                    <p>Second tab.</p>
                </div>
                <div x-show="currentTab === 'third'">
                    <p>Third tab.</p>
                </div>
            </div>
        </div>
    </body>
</html>
