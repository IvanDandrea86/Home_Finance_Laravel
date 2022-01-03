<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    {{-- <h1>{{session('theme')}}</h1> --}}
    {{View::make('header')}}
    @yield('body')
    {{View::make('footer')}}
</body>
</html>
