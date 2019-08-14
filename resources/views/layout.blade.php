<!DOCTYPE html>
<html>
<head>
	<title>app title_ @yield('title')</title>
</head>
<body>
	<div style="background-color: red">
@section('sidebar')
@show
</div>
    <div class="main" style="background-color: green;
    color: #000380;">
    	@yield('main')
    </div>
    <div class="footer">
    	@section('footer')
    	@show
    </div>
</body>
</html>