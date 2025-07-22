<div class="w-3/4 py-5">
    <!-- player container -->
    <div class="h-126 relative w-full overflow-hidden rounded-lg bg-black">
        <video
            controls
            class="absolute left-0 top-0 h-full w-full object-contain"
        >
            <source
                src="{{ asset("storage/" . $video->video_path) }}"
                type="video/mp4"
            />
            your browser does not support the video tag
        </video>
    </div>

    <!-- video info -->
    <div class="mt-4 space-y-2">
        <h1 class="text-2xl font-semibold">{{ $video->title }}</h1>
    </div>

    <div class="flex justify-between">
        <p>
            {{ $video->user->username }}
        </p>

        <!-- like / dislike buttons -->
        <div class="flex items-center space-x-3">
            <form method="POST" action="{{ route("video.like", $video) }}">
                @csrf
                <button type="submit" class="flex cursor-pointer items-center">
                    <img
                        src="{{ asset("images/thumbs-up.svg") }}"
                        alt="like"
                        class="mr-1 h-5"
                    />
                    {{ $video->likes()->where("is_like", true)->count() }}
                </button>
            </form>

            <form method="POST" action="{{ route("video.dislike", $video) }}">
                @csrf
                <button type="submit" class="flex cursor-pointer items-center">
                    <img
                        src="{{ asset("images/thumbs-down.svg") }}"
                        alt="dislike"
                        class="h-5"
                    />
                </button>
            </form>
        </div>
    </div>

    <p class="text-gray-700">{{ $video->description }}</p>
</div>
