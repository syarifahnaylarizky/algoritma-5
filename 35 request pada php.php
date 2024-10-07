<html>
<body>
	<form method="POST" action="?action=edit">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="hidden" name="action" value="insert">
		<input type="submit" name="submit" value="submit">
	</form>
	
	<?php
	if ($_POST)
	{
		echo '<pre>'; 
		print_r($_GET);
		print_r($_POST);
		print_r($_REQUEST);
	}

// $_GET
Array
(
    [action] => edit
)

// $_POST
Array
(
    [nama] => Ahmadi
    [email] =>ahmadimuslim@gmail.com
    [action] => insert
    [submit] => submit
)

// $_REQUEST
Array
(
    [action] => insert
    [nama] => Ahmadi
    [email] => prawoto.hadi@gmail.com
    [submit] => submit
)

?>
</body>
</html>
