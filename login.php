<?php
	include_once 'header.php';
?>
<section>
	<div class="container">
		<div id="col" class="col-sm-12">
			<div id="jumbo" class="jumbotron">
				<div class="form-group">
					<h1 style="text-align: center;">Login</h1>
				</div>

					<hr>

				<form  id="fo" class="form-horizontal" method="POST" action="include/login.inc.php">
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="email" class="form-control" name="email" placeholder="enter email" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" name="pwd" placeholder="enter password" required>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Login</button>
					</div>
					  <div class="form-group">
						  <p style="font-size: 15px;text-align: center;" class="message">Not registered?<a href="signup.php">Signup</a></p>
					  </div>
				</form>

			</div>
		</div>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
