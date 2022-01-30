<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="welcome.php" class="navbar-brand">STUDENT PORTAL</a>
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="welcome.php">Home</a></li>
  	<li><a href="account.php">My Account</a></li>
	<li><a href="Merit-cutoff.php">Merit Scholarship Details</a></li>
	<li><a href="MCN-cutoff.php">MCN Scholarship Details</a></li>
	<li><a href="FeeStructure.php">Fee Structure</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</nav>