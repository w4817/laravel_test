<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
<footer>
    <div>
        © My site, 2010 - ?
    </div>
</footer>
</body>
</html>