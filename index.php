<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>membuat from Login dengan javascript</title>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<form action="user/formulir.php" method="POST">
</br>
<br/>
<center><h2 align="center">LOGIN</h2></center>
<br/>
<br>
<img src="profil.jpg" class="img-circle" width="150" height="150">
</br>
<div class="login">
<br/>
<form action="login.php" method="post" onsubmit="return validasi()">
<div>
<label>Username:</label>
<input type="text" name="username" id="username"/>
</div>
<div>
<label>Password:</label>
<input type="password:" name="password" id="password"/>
</div>
<div>
<input type="submit" value="Login" class="tombol"/>
</div>
</form>
</div>
</body>
<script type="text/javascript">
function validasi(){
	var username = document.getElementByld("username").value;
	var password = document.getElementBild("password").value;
	if(username!=""&&password!=""){
		return true;
	} else {
		alert('Username dan Password harus diisi');
return false;}}
</script>
</html>



