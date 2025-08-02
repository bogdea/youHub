<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>youHub</title>
        @vite("resources/css/app.css")
        @livewireStyles
    </head>
    <body>
        <div class="flex flex-col p-5">
            @livewire("navbar")

            <div class="flex">
                @livewire("sidebar")

                <div class="flex-1 py-4">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
