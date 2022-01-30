<!--
Into this file, we write a code for displaying user information.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$sname = $sid = $scg = $sbacth =  $mname = $fname = $email = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$sname = $row["Studentname"];
		$sid = $row["Studentid"];
		$scg = $row["Studentcg"];
		$sbatch = $row["Sbatch"];
		$mname = $row["Mothername"];
		$fname = $row["Fathername"];
		$email = $row["Email"];
	}
}
?>
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="img/bitslogo.svg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $sname; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td>Student Name</td>
          		<td><?php echo $sname; ?></td>
          	</tr>
          	<tr>
          		<td>Student ID</td>
          		<td><?php echo $sid; ?></td>
          	</tr>
          	<tr>
          		<td>Student CGPA</td>
          		<td><?php echo $scg; ?></td>
          	</tr>
            <tr>
          		<td>Student Batch</td>
          		<td><?php echo $sbatch; ?></td>
          	</tr>
            <tr>
          		<td>Mother Name</td>
          		<td><?php echo $mname; ?></td>
          	</tr>
			  <tr>
          		<td>Father Name</td>
          		<td><?php echo $fname; ?></td>
          	</tr>
          	<tr>
          		<td>Email</td>
          		<td><?php echo $email; ?></td>
          	</tr>
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
