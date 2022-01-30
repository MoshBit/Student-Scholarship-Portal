<?php 
include_once('link.php');
include_once('header1.php');
include_once('connection.php'); 
$id = $_SESSION['id'];
$query="select Did,Dname,Dhod from department,tbluser WHERE Did=Studentdeptid AND Did IN (select Studentdeptid from tbluser WHERE ID ='$id') "; 
$result=mysqli_query($conn,$query); 
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$did = $row["Did"];
		$dname = $row["Dname"];
		$dhod = $row["Dhod"];
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
        <div class="card-info"> <span class="card-title"><?php echo $did; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Your Department details</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td>Your Department ID</td>
          		<td><?php echo $did; ?></td>
          	</tr>
          	<tr>
          		<td>Your Department Name</td>
          		<td><?php echo $dname; ?></td>
          	</tr>
          	<tr>
          		<td>Your Department HOD</td>
          		<td><?php echo $dhod; ?></td>
          	</tr>
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
<!--
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Your Department </title> 
		<style>
			table {
			border-collapse: collapse;
			width: 900%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			}
			th {
			background-color: #588c7e;
			color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Your Department Details</h2></th> 
		</tr> 
			  <th> Department ID </th> 
			  <th> Department name </th>
              <th> Department HOD </th>  
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Did']; ?></td> 
		<td><?php echo $rows['Dname']; ?></td> 
        <td><?php echo $rows['Dhod']; ?></td>
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
-->