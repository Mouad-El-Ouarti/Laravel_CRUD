<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="{{url('css/style.css')}}">
<body>
    @include("layout.nav")
    @yield('content')
</body>

</html>
