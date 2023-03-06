<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'SAM-J KMART ADMIN') }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>

    <div class="row g-0 auth-row vh-100">
        @yield('content')
    </div>
</body>

</html>
