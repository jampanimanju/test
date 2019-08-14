<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>
	 @foreach($errors->all() as $error)
	 <li>{{$error}}</li>
	 @endforeach
<form method="post" action="/login">
	@csrf 
	user name:<input type="text" name="name"><br>
	password:<input type="password" name="password"><br>
	<button type="submit">login</button>
</form>
</body>
</html>