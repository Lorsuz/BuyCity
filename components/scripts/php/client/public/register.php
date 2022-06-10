<?php session_start();
// session_destroy();
if (!isset($_SESSION['fistLoad']))
{
	$_SESSION['error_nickname'] = $_SESSION['error_email'] = $_SESSION['error_password'] = $_SESSION['error_passwordConfirme'] =	$_SESSION['nickname'] = $_SESSION['email'] = $_SESSION['password'] = $_SESSION['passwordConfirme'] = null;
}
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=form, initial-scale=1.0">

	<title>Document</title>

	<link rel="stylesheet" href="./../../../../custom/css/design/register.css">
</head>

<body>
	<form action="./../private/register_user.php" method="POST">

		<h1>Register</h1>

		<label class="label" for="nickname">Nickname:</label>
		<input name="nickname" class="retangle text" value="<?php echo $_SESSION['nickname']; ?>" type=" text" id="nickname">
		<span class="invalid-feedback"><?php echo $_SESSION['error_nickname']; ?></span>


		<label class="label" for="email">E-mail</label>
		<input name="email" class="retangle text form-control" value="<?php echo $_SESSION['email']; ?>" type="email" id="email">
		<span class="invalid-feedback"><?php echo $_SESSION['error_email']; ?></span>


		<label class="label" for="password">password</label>
		<input name="password" class="retangle text" value="<?php echo $_SESSION['password']; ?>" type="password" id="password">
		<span class="invalid-feedback"><?php echo $_SESSION['error_password']; ?></span>


		<label class="label" for="passwordConfirme">Confirm your password:</label>
		<input name="passwordConfirme" class="retangle text" value="<?php echo $_SESSION['passwordConfirme']; ?>" type="password" id="passwordConfirme">
		<span class="invalid-feedback"><?php echo $_SESSION['error_passwordConfirme']; ?></span>


		<input class="retangle submit" type="submit" value="Entrar">

		<div id="footer">Already have an account?
			<a href="login.php">Log in</a>
		</div>

	</form>
</body>

</html>