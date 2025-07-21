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
        <p>
            {{ $video->user->username }}
        </p>
        <p class="text-gray-700">{{ $video->description }}</p>
    </div>
</div>
