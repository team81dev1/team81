<?php
	
	$errors = array();
	if (isset($_POST['login'])){
		require 'validate.inc';   
		//validateUser($errors, $_POST, 'userName'); 
		//validatePassword($errors, $_POST, 'passwd');
		if ($errors){     
			//echo '<h1>Invalid, correct the following errors:</h1>';    
			foreach ($errors as $field => $error)     
				echo "$field $error</br>";        
			
			// redisplay the form    
			include 'login.php';   
		} 
		include('createDB.inc');
		include('checkpasswd.inc');
		if (checkPassword($_POST['userName'], $_POST['passwd'], $pdo)){
			echo 'Login works';
			session_start(); $_SESSION['isMembers'] = true;
			header('Location: /Week7/parkbark/index.php');
			exit();
		}else if(!(checkPassword($_POST['userName'], $_POST['passwd'], $pdo))){
			echo 'Login Failed';
		}
	}
	
	$title = "Login - Pinelands Music School";
	include('hml_head.inc');
?> 
			<div id="content_area">
				<form action="login.php" method="POST">
					User Name: <input type="text" id="userName" name="userName"><br/>
					<br/>
					Password: <input type="password" id="passwd" name="passwd"><br/>
					<br/>
					<input type="submit" name="login" value="Login">
				</form>
			</div>
			
			<div id="sidebar">
				
			</div>
	<?php
		include('footer.inc');
	?>