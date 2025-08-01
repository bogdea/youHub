<div class="flex h-14 items-center justify-between">
    @livewire("logo")

    @livewire("search-bar")

    <div class="flex items-center space-x-4">
        @if (Auth::check())
            <a
                href="{{ route("upload") }}"
                class="bg-primary rounded-full px-5 py-2 text-white transition hover:bg-blue-700"
            >
                upload
            </a>
        @endif

        @livewire("user-dropdown")
    </div>
</div>
