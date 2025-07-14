<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>youHub</title>
        @vite("resources/css/app.css")
        @livewireStyles
    </head>
    <body class="p-5">
        @livewire("navbar")

        {{ $slot }}

        @livewireScripts
    </body>
</html>
