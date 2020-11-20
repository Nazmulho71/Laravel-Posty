<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('posty.svg') }}" type="image/x-icon" />

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <title>{{ $pageTitle }} | {{ config('app.name', 'Posty') }}</title>

</head>
<body class="bg-gray-200">
    
    @include('includes.nav')

    @yield('content')

</body>
</html>