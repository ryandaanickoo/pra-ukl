<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
 
	<div class="kotak">
		<p class="tulisan">LOGIN</p>
 
		<form method="POST" action="proses-login.php">
			<label>Username</label>
			<input type="text" name="username" class="form" placeholder="Username atau email">
 
			<label>Password</label>
			<input type="password" name="password" class="form" placeholder="Password">
 
			<input type="submit" class="tombol" name="login" value="login">
 
		</form>
		
	</div>
 
 
</body>
</html>