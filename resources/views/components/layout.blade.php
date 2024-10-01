<!doctype html>
<html class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Piaijeii_logo.png">
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden relative">

    <x-navbar></x-navbar>
    <main class="w-full h-full bg-white pt-28 px-4 lg:px-16 font-poppins">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
    <x-backtotop></x-backtotop>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/8b0b03f283.js" crossorigin="anonymous"></script>

</body>
</html>