<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title> @yield('title') | Laravel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @include('menu')
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>