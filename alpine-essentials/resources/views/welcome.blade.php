<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="/js/app.js"></script>
        <title>Alpine Examples</title>
    </head>

    <body class="p-10 max-w-lg mx-auto">
        <div
            class="bg-gray-300 px-10 py-6 rounded"
            x-data="taskApp()"
        >
            <form @submit.prevent="submit">
                <input
                    type="text"
                    placeholder="Go to the market..."
                    x-model="newTask"
                    class="w-full px-1"
                >
            </form>

            <ul class="list-disc mt-3">
                <template x-for="(task, index) in tasks" :key="index">
                    <li>
                        <input type="checkbox" x-model="task.completed">
                        <span x-text="task.body" :class="{ 'line-through' : task.completed }"></span>
                    </li>
                </template>
            </ul>
        </div>
    </body>
</html>
