<?php
if isset($_POST['submit']){
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	echo $user.':'.$pass;
}

?>


<!DOCTYPE html>
<html>

<body>

<form action="" method="post">
	<input type="text" name="username"/>
	<input type="password" name="pass"/>
	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
