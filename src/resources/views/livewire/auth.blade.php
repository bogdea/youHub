<div class="mx-auto max-w-md rounded-lg p-5 shadow">
    <div class="flex flex-col items-center">
        @livewire("logo")

        <span>-</span>

        <h1 class="mb-4 text-center text-lg font-medium">
            {{ $mode === "login" ? "sign in" : "create account" }}
        </h1>
    </div>

    <form wire:submit.prevent="{{ $mode }}">
        <input
            wire:model.lazy="username"
            placeholder="username"
            class="mb-3 w-full rounded-full border border-gray-300 px-4 py-2 transition focus:outline-none focus:ring-1 focus:ring-gray-500"
        />
        <input
            wire:model.lazy="password"
            type="password"
            placeholder="password"
            class="mb-3 w-full rounded-full border border-gray-300 px-4 py-2 transition focus:outline-none focus:ring-1 focus:ring-gray-500"
        />
        <button
            type="submit"
            class="w-full cursor-pointer rounded-full bg-blue-600 py-2 text-white transition hover:bg-blue-700"
        >
            {{ $mode === "login" ? "sign in" : "register" }}
        </button>
    </form>

    <p class="mt-4 text-center text-sm">
        @if ($mode === "login")
            don't have an account?
            <button wire:click="$set('mode', 'register')" class="text-primary">
                register
            </button>
        @else
            already have an account?
            <button wire:click="$set('mode', 'login')" class="text-primary">
                sign in
            </button>
        @endif
    </p>
</div>
