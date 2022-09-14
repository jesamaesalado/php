<?php

?>
<form action="php_exercise6b_salado.php" method="post" style="background-color: yellow; text-align:center; width: 500px;"><br>
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
	</p>
	<p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
	</p>
	<p><input type="checkbox" name="remember" /> Remember me
	</p>
	<p><input type="submit" value="Login"></span></p><br>     
</form>