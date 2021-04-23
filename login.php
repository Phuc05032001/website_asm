<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
</head> 
<body> 
<form action='login.php' class="dangnhap" method='POST'> 
<h1 style="text-align: center;">Login</h1>
Username : <input type='text' name='username' required/> 
Password : <input type='password' name='password' required/> 
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
<a href='register.php' title='Đăng ký' style=" text-decoration:none">Register</a> <br>
<a href='forgotpass.php' title='Lấy lại pass' style=" text-decoration:none">Forgot password</a> 
<?php include 'xuly.php';?> 
<form> 
</body> 
</html>