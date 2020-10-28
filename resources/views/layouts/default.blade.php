<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>NewWeibo App @yield('title','NewWeibo App')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts._header')
<div class="container">
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>