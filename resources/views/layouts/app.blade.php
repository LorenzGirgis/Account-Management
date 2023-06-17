<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account-Management</title>
    <script src="{{ asset('js/app.js') }}"></script>
    @vite("resources/css/app.css")
    </head>
<body>
   @include('layouts.nav')
    @yield('content')
</body>
</html>