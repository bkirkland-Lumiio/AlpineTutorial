<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
        <style>
            .active {
                color: red;
            }
        </style>
    </head>

    <body class="p-10 max-w-lg mx-auto">
        <form
            x-data="{
                form: {
                    name: 'John Smith'
                },

                user: null,

                submit() {
                    fetch('https://reqres.in/api/users', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(this.form)
                    })
                    .then(response => response.json())
                    .then(user => this.user = user)
                }
            }"
            @submit.prevent="submit"
        >
            <div class="mb-6">
                <label  class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="name"
                >
                    Name
                </label>

                <input  class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        x-model:="form.name"
                        required
                >
            </div>

            <template x-if="user">
                <div x-text="'The user ' + user.name + ' was created at ' + user.createdAt"></div>
            </template>
        </form>
    </body>
</html>
