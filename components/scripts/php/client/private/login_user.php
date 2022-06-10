<?php

include '../../classes/users.class.php';

session_start();


$user = new USER();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	if (empty(trim($_POST["email"])))
	{
		$_SESSION['error_email'] = "Por favor, insira o email vinculado a conta.";
	}
	else
	{
		$email = trim($_POST["email"]);
	}



	if (empty(trim($_POST["password"])))
	{
		$_SESSION['error_password'] = "Por favor, insira sua senha.";
	}
	else
	{
		$password = trim($_POST["password"]);
	}



	if (!isset($_SESSION['error_email']) && !isset($_SESSION['error_password']))
	{
		$loginSuccess = $user->logIn($email, $password);
		// echo $loginSuccess;
		if ($loginSuccess === true)
		{
			$_SESSION["loggedin"] = true;
		}
		elseif ($loginSuccess === 'error_password')
		{
			$_SESSION['error_login'] = "Senha inválida.";
			
		}elseif ($loginSuccess === 'error_email') {
			$_SESSION['error_login'] = "email nao cadastrado.";
		}else{
			$_SESSION['error_login'] = "nao tenho ideia de qual é o problema.";
		}
	}
}
else
{
	$_SESSION['error_login'] = "houve um erro tente novamente mais tarde.";
}
$_SESSION['fistLoad'] = null;
header("location: ../public/login.php");
exit;