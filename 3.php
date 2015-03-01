<?php
interface IAuthenticatable {
	public function storePassword($password);
	public function verifyPassword($password);
}

class Auth implements IAuthenticatable {
 
 	public function __construct() {
 		session_start();
 	}
	public function storePassword($password) {
		$_SESSION['password_hash'] = md5($password);
	}
	public function verifyPassword($password) {
		return $_SESSION['password_hash'] == md5($password);
	}
}
