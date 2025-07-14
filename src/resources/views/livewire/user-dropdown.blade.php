<div x-data="{ open: false }" class="relative flex items-center">
    <button @click="open = !open">
        <img
            src="{{ asset("images/user.jpeg") }}"
            alt="logo"
            class="h-10 rounded-full border-2 border-gray-500"
        />
    </button>

    <div
        x-show="open"
        @click.away="open = false"
        x-transition
        class="absolute right-0 top-12 w-48 rounded-lg border border-gray-300 shadow-lg"
    >
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">your channel</a>
    </div>
</div>
