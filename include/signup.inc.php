<?php 
if(isset($_POST['submit'])){
	
	include_once 'dbh.inc.php';
	$first = mysqli_real_escape_string($conn,$_POST['fname']);
	$last = mysqli_real_escape_string($conn,$_POST['lname']);
	$uname = mysqli_real_escape_string($conn,$_POST['uid']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else{
				$sql="SELECT * FROM users WHERE user_uid='$uname'";
				$result=mysqli_query($conn,$sql);
				$resultcheck=mysqli_num_rows($result);

				if($resultcheck > 0){
					header("Location: ../signup.php?signup=taken");
					exit();
				}else{
					$hashedpwd =password_hash($pwd, PASSWORD_DEFAULT);
					$sql="INSERT into users (user_uid,user_first,user_last,user_email,user_pwd) values ('$uname','$first','$last','$email','$hashedpwd');";
					mysqli_query($conn,$sql);
					header("Location: ../login.php?signup=success");
					exit();
				}
			}
}
else{
	header("Location: ../signup.php");
	exit();
}

?>
