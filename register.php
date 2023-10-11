<!DOCTYPE html> 
<html> 
<head> 
<meta charset="ISO-8859-1"> 
<title>Register</title> 
</head> 
<body> 
<?php 
$login = isset($_POST['login']) ? $_POST['login'] : ''; 
$passs = isset($_POST['passs']) ? $_POST['passs'] : ''; 
?> 
<style type="text/css"> 
* { margin: 0; padding: 0; font-family:Tahoma; font-size:9pt;} 
#divCenter { 
background-color: #e1e1e1; 
width: 275px; 
height: 150px; 
left: 50%; 
margin: -130px 0 0 -210px; 
padding:10px; 
position: absolute; 
top: 30%; } 
</style> 
<div id="divCenter"> 
<table width="250" border="1" align="center" cellpadding="0" cellspacing="0"> 
<tr> 
<td><form action="cad.php" method="post" name="form2" target="_self" id="form"> 
<p align="center"><strong>New Register</strong></p> 
<table width="250" border="1" cellspacing="0" cellpadding="0"> 

<tr> 
<td>Login:</td> 
<td><input name="login" type="text" id="login" size="35" value="<?php echo $login; ?>"></td> 
</tr> 

<tr> 
<td>passs:</td> 
<td><input name="passs" type="password" id="passs" size="35" value="<?php echo $passs; ?>"></td> 
</tr> 

</table> 
<p>&nbsp;</p> 
<p align="center"> 
<input type="submit" name="Submit1" value="Register"> 
<input type="reset" name="Submit2" value="Clear"> 
</p> 
</form></td> 
</tr> 
</table> 
</div> 
</body> 
</html>