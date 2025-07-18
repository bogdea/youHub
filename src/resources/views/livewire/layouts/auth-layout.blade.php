<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>youHub - auth</title>
        @vite("resources/css/app.css")
        @livewireStyles
    </head>
    <bod>
        <main class="flex min-h-screen items-center justify-center">
            {{ $slot }}
        </main>
        @livewireScripts
    </bod>
</html>
