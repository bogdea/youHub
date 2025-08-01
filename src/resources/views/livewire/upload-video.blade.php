<div class="mx-auto mt-10 max-w-md rounded-lg bg-white p-5 text-black shadow">
    <h1 class="mb-4 text-2xl font-semibold">upload video</h1>
    <form
        wire:submit.prevent="save"
        enctype="multipart/form-data"
        class="space-y-4"
    >
        <div>
            <label class="mb-1 block">title</label>
            <input
                type="text"
                wire:model="title"
                class="w-full rounded-lg border border-gray-300 px-4 py-2 transition focus:outline-none focus:ring-1 focus:ring-gray-500"
            />
            @error("title")
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="mb-1 block text-sm font-medium text-gray-700">
                description
            </label>
            <textarea
                wire:model="description"
                class="w-full rounded-lg border border-gray-300 p-2 px-4 py-2 text-black transition focus:outline-none focus:ring-1 focus:ring-gray-500"
            ></textarea>
            @error("description")
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="mb-1 block text-sm font-medium text-gray-700">
                video file
            </label>
            <input
                type="file"
                wire:model="video"
                wire:key="video-upload"
                id="video"
                accept="video/mp4,video/mov,video/webm"
                class="w-full"
            />
            @error("video")
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button
            type="submit"
            class="bg-primary w-full cursor-pointer rounded-lg px-4 py-2 text-white hover:bg-blue-700"
            wire:loading.attr="disabled"
            wire:target="video"
        >
            upload
        </button>
        <div
            wire:loading
            wire:target="video"
            class="mt-2 text-sm text-gray-500"
        >
            uploading video, please wait...
        </div>
    </form>
</div>
