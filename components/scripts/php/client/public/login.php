<?php
echo !isset($_SESSION['fistLoad']);
if (!isset($_SESSION['fistLoad']))
{
	$_SESSION["loggedin"] = $_SESSION['error_email'] = $_SESSION['error_password'] =	$_SESSION['email'] = $_SESSION['password'] = $_SESSION['error_login'] = null;
	echo'ar';
}
// $_SESSION['loggedin']=true;
	echo($_SESSION['loggedin']);
	if ($_SESSION['loggedin'] == true)
	{
		header("location: ../../game/public/index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=form, initial-scale=1.0">
	<link rel="stylesheet" href="../../../../custom/css/design/login.css">
	<title>Document</title>
</head>

<body>
	<form action="../private/login_user.php" method="POST">

		<h2>Bem vindo de volta</h2>
		<h1>Faça login na sua conta</h1>

		<label class="label" for="email">E-mail</label>
		<input name="email" value="<?php echo $_SESSION['email']; ?>" class="rectangle text" type="email" id="email">
		<span class="invalid-feedback"><?php echo $_SESSION['error_email']; ?></span>


		<label for="password">Senha</label>
		<input name="password" value="<?php echo $_SESSION['password']; ?>" class="rectangle text" type="password" id="password">
		<span class="invalid-feedback"><?php echo $_SESSION['error_password']; ?></span>


		<div id="lembrar">
			<input type="checkbox" name="lembrar">
			<span>Lembre de mim</span>
			<a href="#" class="">Esqueceu sua senha?</a>
		</div>

		<input class="rectangle submit" type="submit" value="Entrar">
		<span class="invalid-feedback"><?php echo $_SESSION['error_login']; ?></span>


		<div id="footer">Não tem uma conta?
			<a href="register.php">Cadastre-se</a>
		</div>

	</form>
</body>

</html>