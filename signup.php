<?php
	include_once 'header.php';
?>
<section>
	<div class="container">
		<div id="col" class="col-sm-12">
			<div id="jumbo" class="jumbotron">
				<div class="form-group">
					<h1 style="text-align: center;">Signup</h1>
				</div>

					<hr>

				<form id="fo" class="form-horizontal" action="include/signup.inc.php" method="POST">
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" name="fname" placeholder="enter firstname" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" name="lname" placeholder="enter lastname" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" name="uid" placeholder="enter username" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span>
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
						<button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">signup</button>
					</div>
					  <div style="margin-left: 130px" class="form-group">
						  <p style="font-size: 15px" class="message">already have an account?<a href="login.php">login</a></p>
					  </div>
				</form>

			</div>
		</div>
	</div>
</section>
<?php
	include_once 'footer.php';
?>