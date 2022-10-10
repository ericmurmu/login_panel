<?php

	session_start();
	if (isset($_SESSION['uname'])) {

		echo "<h1>Welcome to main page</h1>";
		
		echo "<br><a href ='welcome.php'><input type=button name=back value=back></a>";
	}
	else{
		echo "<script>location.href='login.php'</script>";
	}


?>
