<?php 
include_once('link.php');
include_once('header1.php');
include_once('connection.php'); 
$query="select * from feestructure"; 
$result=mysqli_query($conn,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> FEE-STRUCTURE </title> 
		<style>
			table {
			border-collapse: collapse;
			width: 600%;
			color: #cc0066;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			}
			th {
			background-color: #cc0066;
			color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Fee Structure Details AY 2020-21</h2></th> 
		</tr> 
			  <th> Batch </th> 
			  <th> Fee to be Paid (in Rupees) </th>  
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['batch']; ?></td> 
		<td><?php echo $rows['tution_fee']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>