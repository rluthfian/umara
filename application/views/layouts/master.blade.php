<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('layouts.head')
    <link rel="icon" href="{{ assets_url('images/favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.foot')
</body>
</html>