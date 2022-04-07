<?php
	 include_once 'inc/config.php'; // Include the file with constructor
	 include_once 'inc/connect.php'; // Include the file to database

	 # If button is clicked
	 if (isset($_POST['subscribe'])){
	 	$username = trim($_POST['username']); // Trim name and remove backslashes, extra spaces...
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email field

		$news = new user($username,$email); // Call class Users

		// Insert vars in the database tbl_user
		$sql = $db->query("INSERT INTO newsletter(name,email) VALUES('$username','$email')");
			# Display Name and Email if submission for is successful
			if ($sql){
				// echo "<p style='color: #fff;'>Hi, ".$news->getName().". Your email address is ".$news->getEmail()."</p>";
				echo "<script>alert('Hi, ".$news->getName().". You entered this email address: ".$news->getEmail()."')</script>";
			}else{
				// Display error if submission is unsuccessfully
				echo "<script>alert('Unable to send email')</script>";
				echo mysqli_error($db);
			}
	 } 



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tree house Newsletter</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="form-submit">
					<!-- Validate form if it was submitted with empty fields -->
					<form name="myForm" action='index.php' method='POST' onsubmit="return(validate());">
						<div class="form">
							<div class="card">
								<h2>Subscribe to our newsletter:</h2>
						<br>
						<label>Name</label>
						<input type='text' name='username' placeholder='Name' value="<?php if (isset($_POST['username'])){ echo $username; } ?>">
						<br>
						<label>Email</label>
						<input type='email' name='email' placeholder='Email' value="<?php if (isset($_POST['email'])){ echo $email; } ?>">
						<br>

						<input type='submit' name='subscribe' onclick="myFunction()" class='btn btn-primary btn-sm'>
							</div>
						</div>
					</form>
				</div>
		</div>
	</div>
















	<script>
	function validate(){
		var name = document.forms["myForm"]["username"];
    	var email = document.forms["myForm"]["email"];

    	if (name.value == "") {
      		window.alert("Please enter your name.");
      		name.focus();
      		return false;
    }

    if (email.value == "") {
      		window.alert("Please enter a valid e-mail address.");
      		email.focus();
      		return false;
    }
    return true;
	}

	function disable(){
		$(document).ready(function(){
			$("#noJS").hide();
			$("#form").show();
		});
	}

</script>








	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
