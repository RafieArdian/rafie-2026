<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $profile?->name ?? 'Portfolio' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @livewireStyles
</head>

<body class="bg-slate-50 text-slate-900 antialiased">

    <div class="min-h-screen">

        {{ $slot }}

    </div>

    @livewireScripts

</body>
</html>