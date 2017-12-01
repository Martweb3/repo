<html>
<head>
    <title>App Name - Testing   @yield('title')</title>
</head>
<body>
@section('sidebar')
    esta es la barra lateral
@show

<div class="container">
    @yield('content')
</div>


</body>
</html>