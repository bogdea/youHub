<div>
    <div class="flex items-center space-x-4">
        <div>
            <h1 class="text-2xl font-bold">{{ $user->username }}</h1>

            <p class="text-gray-500">
                {{ $user->subscribers->count() }}
                {{ $user->subscribers->count() == 1 ? "subscriber" : "subscribers" }}
            </p>
        </div>

        <div>
            @auth
                @if (auth()->user()->id !== $user->id)
                    @if (auth()->user()->subscriptions->where("subscribed_to_id", $user->id)->count())
                        <form
                            method="POST"
                            action="{{ route("unsubscribe", $user) }}"
                        >
                            @csrf
                            <button
                                class="cursor-pointer rounded-full bg-red-500 px-4 py-2 text-white"
                            >
                                unsubscribe
                            </button>
                        </form>
                    @else
                        <form
                            method="POST"
                            action="{{ route("subscribe", $user) }}"
                        >
                            @csrf
                            <button
                                class="bg-primary cursor-pointer rounded-full px-4 py-2 text-white"
                            >
                                subscribe
                            </button>
                        </form>
                    @endif
                @endif
            @endauth
        </div>
    </div>

    <div
        class="grid grid-flow-row grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-4 py-5"
    >
        @foreach ($user->videos as $video)
            <a href="{{ route("videos.show", $video) }}">
                <div class="mb-2 min-h-40 rounded-lg border p-4">
                    <h2 class="text-xl font-semibold">{{ $video->title }}</h2>
                    <p>{{ $video->user->username }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
