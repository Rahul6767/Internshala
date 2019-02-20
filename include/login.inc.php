<?php 

session_start();

if(isset($_POST['submit'])){
	
	include_once 'dbh.inc.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

				$sql="SELECT * FROM users WHERE user_email='$email'";
				$result=mysqli_query($conn,$sql);
				$resultcheck=mysqli_num_rows($result);

				if($resultcheck < 0){
					header("Location: ../login.php?login=error");
					exit();
				}else{
					if ($row = mysqli_fetch_assoc($result)) {
						$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
						if (hashedPwdCheck == false) {
						header("Location: ../login.php?login=error");
						exit();	
						}else if (hashedPwdCheck == true) {
							$_SESSION['u_id'] = $row['user_uid'];
							$_SESSION['u_first'] = $row['user_first'];
							$_SESSION['u_last'] = $row['user_last'];
							$_SESSION['u_email'] = $row['user_email'];
							$_SESSION['u_pwd'] = $row['user_pwd'];
							header("Location: ../index.php?login=success");
							exit();
						}
			}
		}
	}

?>
