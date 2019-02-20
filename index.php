<?php
	include_once 'header.php';
?>
<section id="main">
	
	<?php
		if(isset($_SESSION['u_email'])){
			echo "<H1>HELLO</H1>".$_SESSION['u_email'];
			echo '<h1>Welcome to website123</h1>'; 	
		}
		else{
			echo '<h1>Please login to enter website123</h1>';
		}
	?>
</section>
<?php
	include_once 'footer.php';
?>