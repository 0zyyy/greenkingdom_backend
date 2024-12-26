<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Kingdom</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/auth_logo.png') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset("assets/js/headlessui.js") }}"></script>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
<body class="bg-white flex flex-col min-h-screen">
<div class="bg-white">
    @include('components.navbar')
    @yield('content')
    <script type="javascript">
        window.addEventListener("load", function(event) {
            document.querySelector('[data-dropdown-toggle="dropdown"]').click();
        });
    </script>
</div>
</body>
</html>

