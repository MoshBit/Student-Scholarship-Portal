<?php 
include_once('link.php');
include_once('header1.php');
include_once('connection.php'); 
$query="select * from mcncutoff"; 
$result=mysqli_query($conn,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Merit-Cum-Need Scholarship </title> 
		<style>
			table {
			border-collapse: collapse;
			width: 600%;
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
		<th colspan="4"><h2>MCN Scholarship Details AY 2020-21</h2></th> 
		</tr> 
			  <th> CGPA Category </th> 
			  <th> Scholarship Offered </th>  
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['cg_cat'] ; ?></td> 
		<td><?php echo $rows['perc'];echo "%"; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>