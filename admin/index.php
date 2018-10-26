<div class="d-flex flex-wrap flex-column justify-content-between h-100">
<div>
<?php
include( '../includes/adminLoginHeader.php' );
require_once( '../includes/config.php' );
require_once( 'adminController.php' );
?>
</div>

<div>
<div class="container">


	<div class="container">

		<form class="form-signin" action="" method="post">

<h3 class="text-center text-uppercase"><strong>Admin Login</strong></h3>
	<p class="text-center"> Enter your credentials to access admin rights.</p>
			<div class="form-group">
				<label for="inputEmail" class="sr-only">Email address</label>
				<input class="form-control" type="email" name="email" class="form-control" placeholder="Email address" required autofocus><span id="emailerr"></span>
			</div>

			<div class="form-group">

				<label for="inputPassword" class="sr-only">Password</label>
				<input class="form-control" type="password" name="password" class="form-control" placeholder="Password" required><span id="passworderr"></span>
			</div>

			<div class="text-center"><input type="submit" class="btn d-inline-block w-100 btn-primary" name="login"></div>
		</form>

	</div>
	<!-- /container -->
</div>
</div>


<div><?php include('../includes/adminFooter.php'); ?></div>



</div>