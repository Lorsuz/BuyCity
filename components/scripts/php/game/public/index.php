<?php
session_start();

if (isset($_SESSION["loggedin"]))
{
	if ($_SESSION["loggedin"] === true)
	{
		session_destroy();
		session_start();
		$_SESSION["loggedin"] = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>ola mundo</h1>
	<a href="../../client/private/logout.php">click aqui pra encerrar a sessao</a>
</body>

</html>