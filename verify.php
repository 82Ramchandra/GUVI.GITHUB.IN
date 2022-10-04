<?php
	include 'includes/session.php';

	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	exit();*/

	if(isset($_POST['login'])){
		if((isset($_POST['email']))&&(isset($_POST['password']))):
			$email = $_POST['email'];
			$password = $_POST['password'];
			try{

				$row = countData('SELECT *, COUNT(*) AS numrows FROM users WHERE email = "'.$email.'"');
				if($row['numrows'] > 0){
						if(password_verify($password, $row['password'])){
							
							$_SESSION['admin'] = $row['id'];
							
						}
						else{
							$_SESSION['error'] = 'Incorrect Password';
						}
					
				}
				else{
					$_SESSION['error'] = 'Email not found';
				}
			}
			catch(PDOException $e){
				echo "There is some problem in connection: " . $e->getMessage();
			}
		else:
			$pin = $_POST['pin'];
			try
			{
				$row = countData('SELECT *, COUNT(*) AS numrows FROM users WHERE pin = "'.$pin.'"');
				if($row['numrows'] > 0){
						$_SESSION['admin'] = $row['id'];
						/*if(password_verify($password, $row['password'])){
							
							$_SESSION['admin'] = $row['id'];
							
						}
						else{
							$_SESSION['error'] = 'Incorrect Password';
						}*/
					
				}
				else{
					$_SESSION['error'] = 'Invalid PIN';
				}
			}
			catch(PDOException $e){
				echo "There is some problem in connection: " . $e->getMessage();
			}
		endif;
	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
	}

	header('location: index.php');
?>