<!DOCTYPE html>
<html>
    <!-- asdad -->
<head>
	<title>login page</title>

	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time();?>">
</head>

<body>
		<div class="container">
			<form action="welcome.php" method="post">
				
					<div class="form-group">
						<th colspan="2" align="center"><h1>Login</h1></th>
					</div>
					
					<div class="form-group">
						<td>Username</td>
						<td><input type="text" class="form-control" name="uname"></td>
					</div>
					

					<div>
						<td>Password</td>
						<td><input type="password" class="form-control" name="pwd"></td><br>
					</div>
					

					<div>
						<td align="right" colspan="2"><input type="submit" class="btn" name="login" value="Login"></td>
					</div>
			</form>
		</div>

</body>
</html>
