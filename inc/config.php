<?php 
	include 'connect.php';

	class user{

		public $name;
		public $email;

		function __construct($name, $email){
			$this->name = $name;
			$this->$email = $email;
		}

		function getName(){
			return $this->name;
		}
		function getEmail(){
			return $this->email;
		}

		function newsletter(){
			// return " Your email address is ".$this->email;
			$tbl = "INSERT INTO ";
			if (!empty($name) && !empty($email)){

			}
		}
		// function insert(){
		// 	$username = trim($_POST['username']);
		// 	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
								
		// 	$sql = "INSERT INTO newsletter(name,email) VALUES('$username','$email')";
		// }

	}

 ?>