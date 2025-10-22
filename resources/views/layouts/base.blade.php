<!DOCTYPE html>
<html lang="en" @yield('html-attributes')>

<head>
    @include('layouts.partials/title-meta')

    @include('layouts.partials/head-css')

</head>

<body @yield('body-attributes')>

    @yield('header')

    @yield('content')

    @include('layouts.partials/footer-scripts')

</body>

</html>