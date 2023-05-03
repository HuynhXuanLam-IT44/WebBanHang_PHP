<form method="post">
	<input type="text" name="info[]">
	<input type="text" name="info[]">
	<input type="submit" name="submit" value="Login">
</form>
<?php
	if(isset($_POST['submit'])){
		echo $_POST['info'][0].'<br>'.$_POST['info'][1];
	}
?>