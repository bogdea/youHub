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
        class="absolute right-0 top-12 w-48 space-y-1 rounded-lg border border-gray-300 bg-white p-1 shadow-lg"
    >
        @if (Auth::check())
            <a
                href="{{ url("/user/" . Auth::user()->username) }}"
                class="block rounded-lg px-4 py-2 text-center hover:bg-gray-100"
            >
                your channel
            </a>
            <form method="POST" action="{{ route("logout") }}">
                @csrf
                <button
                    type="submit"
                    class="w-full cursor-pointer rounded-lg bg-red-500 px-4 py-2 text-white transition hover:bg-red-600"
                >
                    log out
                </button>
            </form>
        @else
            <a
                href="{{ url("/auth") }}"
                class="block w-full cursor-pointer rounded-lg bg-blue-600 px-4 py-2 text-center text-white transition hover:bg-blue-700"
            >
                sign in
            </a>
        @endif
    </div>
</div>
