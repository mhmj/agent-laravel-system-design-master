<!doctype html>
<html lang="en">
<head>
    @include('sources.login.header')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading  footer-fixed">
<div id="app">
    @yield('content')
</div>
@include('sources.login.footer')
</body>
</html>