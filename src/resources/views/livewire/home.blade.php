<div
    class="grid grid-flow-row grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-4 py-5"
>
    @foreach ($videos as $video)
        <div class="mb-2 min-h-40 rounded-lg border p-4">
            <a href="{{ route("videos.show", $video) }}">
                <h2 class="text-xl font-semibold">{{ $video->title }}</h2>
            </a>
            <p>{{ $video->user->username }}</p>
        </div>
    @endforeach
</div>
