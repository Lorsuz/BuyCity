<?php

include "../../../../database/connection/connect_database.php";
include '../../classes/users.class.php';

session_start();

$_SESSION['fistLoad'] = false;
$nickname = $email = $password = '';
$_SESSION['error_nickname'] = $_SESSION['error_email'] = $_SESSION['error_password'] = $_SESSION['error_passwordConfirme'] =	$_SESSION['nickname'] = $_SESSION['email'] = $_SESSION['password'] = $_SESSION['passwordConfirme'] = null;

$user = new USER();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (empty(trim($_POST["nickname"]))){
		$_SESSION['error_nickname'] = "Por favor coloque um nome.";
	}elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["nickname"]))){
		$_SESSION['error_nickname'] = "O nome pode conter apenas letras, números e sublinhados.";
	}elseif (!preg_match('/\s*/', trim($_POST["nickname"]))){
		$_SESSION['error_nickname'] = "O nome nao deve conter espaços em branco.";
	}else{
		$nicknameParam = trim($_POST["nickname"]);
		$query = "SELECT id FROM users WHERE nickname = :nickname";

		$stmt = $PDO->prepare($query);
		$stmt->bindParam(":nickname", $nicknameParam, PDO::PARAM_STR);

		$stmt->execute();
		if ($stmt->rowCount() == 1){
			$_SESSION['error_nickname'] = "Este nome já está em uso.";
		}else{
			$nickname = trim($_POST["nickname"]);}
		unset($stmt);}



	if (empty(trim($_POST["email"]))){
		$_SESSION['error_email'] = "Por favor coloque seu email.";
	}else{
		$emailParam = trim($_POST["email"]);
		$query = "SELECT id FROM users WHERE email = :email";
		$stmt = $PDO->prepare($query);
		$stmt->bindParam(":email", $emailParam, PDO::PARAM_STR);
		$stmt->execute();
		if ($stmt->rowCount() == 1){
			$_SESSION['error_email'] = "Este email já está em uso.";
		}else{
			$email = trim($_POST["email"]);}
		unset($stmt);}



	if (empty(trim($_POST["password"]))){
		$_SESSION['error_password'] = "Por favor insira uma senha.";
	}elseif (strlen(trim($_POST["password"])) < 6 && strlen(trim($_POST["password"])) > 20){
		$_SESSION['error_password'] = "A senha deve ter pelo menos 6 caracteres e no maximo 20.";
	}elseif (!preg_match('/\s*/', trim($_POST["password"]))){
		$_SESSION['error_password'] = "A senha nao deve conter espaços em branco.";
	}else{
		$password = trim($_POST["password"]);}



	if (empty(trim($_POST["passwordConfirme"]))){
		$_SESSION['error_passwordConfirme'] = "Por favor, confirme a senha.";
	}else{
		$passwordConfirme = trim($_POST["passwordConfirme"]);
		if ($password != $passwordConfirme){
			$_SESSION['error_passwordConfirme'] = "A confimaçao de senha não confere.";}}



	if (!isset($_SESSION['error_nickname']) && !isset($_SESSION['error_email']) && !isset($_SESSION['error_password']) && !isset($_SESSION['error_passwordConfirme'])){
		$password = password_hash($password, PASSWORD_DEFAULT);
		$registeredSuccess = $user->registerUser($nickname, $email, $password);
		if ($registeredSuccess){
			$_SESSION["loggedin"] = true;
			header("location: ../../game/public/index.php");
			exit;}}



	$_SESSION['nickname'] = $_POST['nickname'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['passwordConfirme'] = $_POST['passwordConfirme'];

	header("location: ../public/register.php");
	unset($PDO);}
