<?php
class USER{

	private $PDO;
	private $isLoggedin;

	public function __construct(){
		$this->PDO = new PDO("mysql:dbname=buycity;host=localhost", "root", "");
		$this-> isLoggedin = false;}


	function __get($attribute){
		return $this->$attribute;}

	function __set($attribute, $value){
		$this->$attribute = $value;}



	public function registerUser($nickname, $email, $password){
		$query = "INSERT INTO users (nickname, email, password) VALUES (:nickname, :email, :password)";
		$stmt = $this->PDO->prepare($query);
		$stmt->bindValue(":nickname", $nickname);
		$stmt->bindValue(":email", $email);
		$stmt->bindValue(":password", $password);
		$stmt->execute();
		return true;}



	public function logIn($email, $password){
		
		$query = 'SELECT email,password FROM users WHERE email = :email';
		$stmt = $this->PDO->prepare($query);
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		$rowCount = $stmt->rowCount();
		if($rowCount == 1){
			$OBJ_user = $stmt->fetch(PDO::FETCH_OBJ);
			 $password_rash = $OBJ_user->password;
			 if(password_verify($password, $password_rash)){
				return true;
			 }else{
				 return 'error_password';
			 }
		}else{
			return 'error_email';
		}
		
		}

}
