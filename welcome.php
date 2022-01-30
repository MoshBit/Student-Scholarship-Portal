<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$sname = $sid = $scg = $sdeptid = $mname = $email = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$sname = $row["Studentname"];
		$sid = $row["Studentid"];
		$scg = $row["Studentcg"];
		$sdeptid = $row["Studentdeptid"];
		$mname = $row["Mothername"];
		$email = $row["Email"];
	}
}

?>

<div class="jumbotron">
	<center>
		<h1>Hello, <?php echo $sname."!"; ?></h1>
	</center>
</div>

<div class="container">
<h2>DASHBOARD</h2>

<div class="card bg-danger text-white">
  <div class="card-header">
    <b class="text-body"> SCHOLARSHIPS AND FEE </b>
  </div>
  <div class="card-body">
    <p class="card-text">Apply for institute's Merit-Cum-Need Scholarship here.</p>
    <a href="scholarship.php" class="btn btn-primary">Apply Now</a>
    <p class="card-text">Check here to see the fee to be paid after scholarship deductions.</p>
    <a href="feepayment.php" class="btn btn-primary">Check Now</a>
  </div>
</div>
  <br>

  <div class="card bg-success text-white">
  <div class="card-header">
  <b class="text-body"> OTHER INFORMATION </b>
  </div>
  <div class="card-body">
    <p class="card-text">Check the list of students with MCN scholarship offer.</p>
    <a href="info.php" class="btn btn-primary">Check Now</a>
    <p class="card-text">Check the list of students with Merit scholarship offer.</p>
    <a href="info1.php" class="btn btn-primary">Check Now</a>
  </div>
</div>
  <br> 

  <div class="card bg-info text-white">
  <div class="card-header">
  <b class="text-body"> ACADEMICS </b>
  </div>
  <div class="card-body">
    <p class="card-text">See your academic department details.</p>
    <a href="Department-details.php" class="btn btn-primary">Explore</a>
  </div>
</div>
  <br>

</div>


<!--
<div class="jumbotron">
  <h1 class="display-4">Hello, <?php echo $sname."!"; ?></h1>
  <p class="lead">Welcome to student Scholarship Portal.</p>
  <hr class="my-4">
  <p>You can apply for MCN scholarship here.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Apply for MCN</a>
  </p>
  <hr class="my-4">
  <p>Check you fee-demand here.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Fee Demand</a>
  </p>
</div>
-->