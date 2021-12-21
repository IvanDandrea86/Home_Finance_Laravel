<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    {{View::make('header')}}
    @yield('body')
    {{View::make('footer')}}
</body>
</html>
